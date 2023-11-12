#!/bin/bash

service mariadb start 
echo "CREATE DATABASE IF NOT EXISTS $DB_NAME;" > file_cmd.sql
echo "CREATE USER IF NOT EXISTS '$DB_USER'@'%' IDENTIFIED BY '$DB_PASSWORD';" >> file_cmd.sql
echo "GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'%';" >> file_cmd.sql
echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '$DB_ROOT_PASSWORD';" >> file_cmd.sql
echo "FLUSH PRIVILEGES;" >> file_cmd.sql
mariadb  < file_cmd.sql

sed -i  "s/127.0.0.1/0.0.0.0/g"  /etc/mysql/mariadb.conf.d/50-server.cnf

kill $(cat /var/run/mysqld/mysqld.pid)

mysqld
