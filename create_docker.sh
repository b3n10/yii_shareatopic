#!/bin/bash

docker run -itd $PWD:/var/www/html --link mysqlserver:mysqldb --name fpm php:7.4-fpm
docker run -itd -p 1235:80 -v $PWD:/var/www/html --link mysqlserver:mysqldb --link fpm --name nginx nginx
