FROM php:8.1-apache as webserver
RUN apt-get update && \
    apt-get install -y libicu-dev && \
    docker-php-ext-configure intl && \
    docker-php-ext-install intl && \
    docker-php-ext-configure pdo_mysql && \
    docker-php-ext-install pdo_mysql && \
    pecl install redis &&  \
    docker-php-ext-enable redis && \
    docker-php-ext-configure opcache --enable-opcache && \
    docker-php-ext-install opcache && \
    a2enmod rewrite

 

RUN echo 'memory_limit = 512M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini;
RUN echo 'max_execution_time = 7200' >> /usr/local/etc/php/conf.d/docker-php-maxexectime.ini;

 

FROM composer as builder-composer
COPY  ./www/cms /app/
RUN composer install --ignore-platform-reqs
RUN composer dumpautoload --optimize

 

FROM webserver
COPY --from=builder-composer --chown=www-data:www-data /app/ /var/www/html
RUN chmod u+x bin/*
RUN mkdir -p /var/www/html/tmp && chown -R www-data:www-data /var/www/html/tmp/  && chmod u+wx -R /var/www/html/tmp/ && \
    mkdir -p /var/www/html/logs && chown -R www-data:www-data /var/www/html/logs/  && chmod u+wx -R /var/www/html/logs/ && \
    mkdir -p /var/www/html/webroot && chown -R www-data:www-data /var/www/html/webroot/  && chmod u+wx -R /var/www/html/webroot/
WORKDIR /var/www/html