FROM ambientum/php:8.1-nginx

ARG DB_HOST
ENV DB_HOST=$DB_HOST

ARG DB_USERNAME
ENV DB_USERNAME=$DB_USERNAME

ARG DB_PASSWORD
ENV DB_PASSWORD=$DB_PASSWORD

ARG DB_DATABASE
ENV DB_DATABASE=$DB_DATABASE

USER root

RUN sed -i \
        -e "s/rlimit_files =.*/;limit_files = 30000/" \
        /etc/php8/php-fpm.conf

COPY . .

RUN chown -R ambientum:ambientum . && chmod -R 777 .

USER ambientum

RUN composer install