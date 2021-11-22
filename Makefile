up:
	docker-compose up -d

down:
	docker-compose down --rmi all --volumes

ps:
	docker-compose ps

sh-php:
	docker-compose exec app bash

sh-node:
	docker-compose exec front_app ash

restart-node:
	docker-compose restart front_app
