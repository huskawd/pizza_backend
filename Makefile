up:
	docker compose up -d
	docker compose exec php composer install
	docker compose exec php php artisan migrate
	docker compose exec php sh -c 'test -f .env || cp .env.example .env'
	docker compose exec php sh -c 'grep -q "^APP_KEY=base64:" .env || php artisan key:generate'
	docker compose exec php sh -c 'grep -q "^JWT_SECRET=." .env || php artisan jwt:secret --force'

down:
	docker compose down

build:
	docker compose build

restart: down up

logs:
	docker compose logs -f

test:
	docker compose exec php php artisan test

jwt-secret:
	docker compose exec php php artisan jwt:secret