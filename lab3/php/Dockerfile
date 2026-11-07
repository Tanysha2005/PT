FROM php:8.2-fpm-alpine
RUN apk update && apk add --no-cache postgresql-dev pcre-dev ${PHPIZE_DEPS} \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql \
    && pecl install redis \
    && docker-php-ext-enable redis