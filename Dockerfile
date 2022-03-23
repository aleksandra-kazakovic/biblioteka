FROM php:8.0-apache

COPY . /var/www/laravel_docker



WORKDIR /var/www/laravel_docker

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


CMD php artisan serve
EXPOSE 8000
