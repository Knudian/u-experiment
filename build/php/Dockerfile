FROM php:7.3-fpm
RUN apt update && apt-get upgrade -yq
RUN apt install git -yq
# Installation d'OpCache et APCU
RUN docker-php-ext-install opcache \
    && pecl install apcu \
    && pecl install apcu_bc-1.0.3 \
    && docker-php-ext-enable apcu --ini-name 10-docker-php-ext-apcu.ini \
    && docker-php-ext-enable apc --ini-name 20-docker-php-ext-apc.ini
# Ajout du driver pour le moteur PostgreSQL
RUN apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql
# Ajout du multithreading
RUN docker-php-ext-install pcntl
COPY www.conf /usr/local/etc/php-fpm.d/
# Installation de composer
RUN curl -sL https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /var/www/html/
EXPOSE 9000
