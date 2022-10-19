FROM php:8.1.12RC1-fpm-alpine3.16

RUN apk add --no-cache openssl bash mysql-client nodejs npm
RUN docker-php-ext-install pdo pdo_mysql

ENV DOCKERIZE_VERSION v0.6.1
RUN wget https://github.com/jwilder/dockerize/releases/download/$DOCKERIZE_VERSION/dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && tar -C /usr/local/bin -xzvf dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz \
    && rm dockerize-alpine-linux-amd64-$DOCKERIZE_VERSION.tar.gz

WORKDIR /var/www
RUN chown -R www-data:www-data /var/www/html
RUN rm -rf /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN chown -R www-data:www-data /var/www
#COPY . /var/www
#RUN composer install && \
#            cp .env.example .env && \
#            php artisan key:generate && \
#            php artisan config:cache


RUN ln -s public html
EXPOSE 9000
ENTRYPOINT ["php-fpm"]