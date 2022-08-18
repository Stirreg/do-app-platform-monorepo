FROM composer:2 AS composer

FROM php:8.1-fpm-alpine

RUN apk add --no-cache acl make postgresql-dev && \
    docker-php-ext-install pdo_pgsql

RUN apk add --no-cache --virtual .build-deps $PHPIZE_DEPS \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && apk del -f .build-deps

COPY xdebug.ini $PHP_INI_DIR/conf.d/xdebug.ini

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /application

CMD ["php-fpm"]
