FROM php:8.2-fpm

RUN set -eux; \
        apt-get update; \
        apt-get install -y --no-install-recommends \
            unzip \
            git \
    ;

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN install-php-extensions \
      intl \
      fileinfo \
      gd \
      imagick \
      vips \
      mysqli \
      pdo_mysql \
    ;

COPY --from=composer /usr/bin/composer /usr/local/bin/

COPY php.ini /usr/local/etc/php/conf.d/zz-overrides.ini

WORKDIR /var/www/html

USER www-data
