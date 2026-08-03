FROM php:8.4-fpm AS base

WORKDIR /var/www/application

RUN apt-get update \
 && apt-get install -y --no-install-recommends \
    bash \
    git \
    curl \
    zip \
    unzip \
    libfcgi-bin \
 && rm -rf /var/lib/apt/lists/*

COPY --from=mlocati/php-extension-installer:2.11.12 \
    /usr/bin/install-php-extensions \
    /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions \
 && install-php-extensions \
    pdo_pgsql \
    intl \
    zip \
    bcmath \
    opcache

COPY --from=composer:2.8.11 /usr/bin/composer /usr/bin/composer

COPY docker/php/php.ini /usr/local/etc/php/conf.d/zz-app.ini
COPY docker/php/www.conf /usr/local/etc/php-fpm.d/www.conf
COPY docker/php/php-fpm.conf /usr/local/etc/php-fpm.conf

HEALTHCHECK --interval=30s --timeout=5s --start-period=20s --retries=3 \
  CMD SCRIPT_NAME=/fpm-ping SCRIPT_FILENAME=/fpm-ping REQUEST_METHOD=GET \
  cgi-fcgi -bind -connect 127.0.0.1:9000 | grep -q "pong" || exit 1

FROM base AS dev

ENV APP_ENV=dev \
    APP_DEBUG=1 \
    COMPOSER_HOME=/tmp/composer

ARG HOST_UID=1000
ARG HOST_GID=1000

RUN install-php-extensions xdebug

RUN groupmod -o -g "${HOST_GID}" www-data \
 && usermod -o -u "${HOST_UID}" -g "${HOST_GID}" www-data \
 && mkdir -p /tmp/composer \
 && chown -R www-data:www-data /tmp/composer

USER www-data

CMD ["php-fpm"]

FROM base AS build

ENV APP_ENV=prod \
    APP_DEBUG=0

COPY application/composer.json application/composer.lock ./

RUN composer install \
    --no-dev \
    --prefer-dist \
    --no-progress \
    --no-interaction \
    --no-scripts

COPY application ./

RUN composer dump-autoload --classmap-authoritative --no-dev && \
    php artisan optimize

FROM base AS prod

ENV APP_ENV=prod \
    APP_DEBUG=0

COPY --from=build /var/www/application /var/www/application

RUN mkdir -p /var/www/application/storage \
 && chown -R www-data:www-data /var/www/application

USER www-data

CMD ["php-fpm"]