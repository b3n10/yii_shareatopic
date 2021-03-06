#!/bin/bash

apt update && apt upgrade -y && apt autoremove -y

apt install libfreetype6-dev -y

docker-php-ext-install pdo pdo_mysql calendar gd

docker-php-ext-configure gd --with-freetype
