FROM php:8.0.0-fpm

RUN apt-get update 
RUN apt-get upgrade -y
RUN apt-get install -y git curl zip vim unzip nano net-tools iputils-ping

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
RUN rm /etc/apt/preferences.d/no-debian-php
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

WORKDIR /var/www/