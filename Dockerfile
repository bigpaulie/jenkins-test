FROM ubuntu:18.04

RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y unzip wget php-cli php-mbstring php-zip php-gd php-common php-mbstring php-json php-xml
RUN wget https://getcomposer.org/composer.phar && mv composer.phar /usr/bin/composer && chmod +x /usr/bin/composer

WORKDIR app
COPY ./composer.* ./
RUN composer install