FROM composer:2 AS composer

FROM php:8.0-fpm-alpine

RUN apk add --no-cache acl make postgresql-dev && \
    docker-php-ext-install pdo_pgsql

RUN apk add --no-cache --virtual .build-deps $PHPIZE_DEPS \
    && pecl install xdebug-3.0.2 \
    && docker-php-ext-enable xdebug \
    && apk del -f .build-deps

COPY xdebug.ini $PHP_INI_DIR/conf.d/xdebug.ini

COPY --from=composer /usr/bin/composer /usr/bin/composer

# ENV COMPOSER_ALLOW_SUPERUSER=1
# RUN composer global require "hirak/prestissimo:^0.3" --prefer-dist --no-progress --no-suggest --classmap-authoritative && \
#     composer clear-cache

WORKDIR /application

CMD ["php-fpm"]
