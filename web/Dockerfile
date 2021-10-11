FROM php:8-apache

RUN docker-php-ext-install \
    # extention for mysql pdo
    pdo_mysql

RUN if command -v a2enmod >/dev/null 2>&1; then \
    a2enmod rewrite headers \
    ;fi