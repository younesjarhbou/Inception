all:
	sudo docker-compose -f srcs/docker-compose.yaml build	
build: all


up: 
	sudo docker-compose -f srcs/docker-compose.yaml up -d

down: 
	sudo docker-compose -f srcs/docker-compose.yaml down

start: 
	sudo docker-compose -f srcs/docker-compose.yaml start

stop: 
	sudo docker-compose -f srcs/docker-compose.yaml stop

restart: 
	sudo docker-compose -f srcs/docker-compose.yaml restart
clean:
	docker container prune -f
	docker volume prune -f
	docker network prune -f

fclean: clean
	docker image prune -f	

.PHONY: down build up ps clean fclean