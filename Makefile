all:
	sudo docker-compose -f srcs/docker-compose.yaml build
	@sudo mkdir -p   "/home/yjarhbou/data/wp" "/home/yjarhbou/data/db"
	
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
	sudo docker system prune && sudo docker system prune --volumes 
