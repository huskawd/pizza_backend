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
	docker compose -f docker-compose.yml -f docker-compose.testing.yml exec php php artisan test