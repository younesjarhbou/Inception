all:
	docker-compose -f srcs/docker-compose.yaml build
	
	
	sudo chmod +x srcs/setup.sh && sudo ./srcs/setup.sh

	ifeq ("$(wildcard .setup)", "")
		sudo chmod 777 /etc/hosts
		sudo echo "127.0.0.1 yjarhbou.42.fr" >> /etc/hosts
		touch .setup

build: all


up: 
	docker-compose -f srcs/docker-compose.yaml up -d

down: 
	docker-compose -f srcs/docker-compose.yaml down

start: 
	docker-compose -f srcs/docker-compose.yaml start

stop: 
	docker-compose -f srcs/docker-compose.yaml stop

restart: 
	docker-compose -f srcs/docker-compose.yaml restart

