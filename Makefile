up:
	docker compose up -d
	docker compose exec php composer install
	docker compose exec php sh -c 'test -f .env || cp .env.example .env'
	docker compose exec php sh -c 'grep -q "^APP_KEY=base64:" .env || php artisan key:generate'
	docker compose exec php sh -c 'grep -q "^JWT_SECRET=." .env || php artisan jwt:secret --force'
	docker compose exec php php artisan migrate

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

cs-check:
	docker compose exec php vendor/bin/php-cs-fixer fix --dry-run --diff

cs-fix:
	docker compose exec php vendor/bin/php-cs-fixer fix

phpstan:
	docker compose exec php vendor/bin/phpstan analyse --memory-limit=512M

rector-check:
	docker compose exec php vendor/bin/rector process --dry-run

rector-fix:
	docker compose exec php vendor/bin/rector process
