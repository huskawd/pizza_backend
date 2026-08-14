up:
	docker compose up -d

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