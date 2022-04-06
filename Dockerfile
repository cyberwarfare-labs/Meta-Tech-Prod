FROM trafex/php-nginx:latest
USER root
RUN apk add --no-cache php-pdo php8-pdo php-pgsql php8-pgsql php-pdo_pgsql php8-pdo_pgsql
COPY php.ini /etc/php8/php.ini
USER nobody
