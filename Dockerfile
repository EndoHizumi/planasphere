FROM php:5.6-apache
RUN apt-get update
RUN docker-php-ext-install pdo_mysql mbstring
# RUN echo 'error_reporting = E_ALL' >> /usr/local/etc/php/conf.d/99_myconf.ini
RUN echo 'date.timezone = Asia/Tokyo' >> /usr/local/etc/php/conf.d/99_myconf.ini
