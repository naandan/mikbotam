FROM php:7.4-fpm-alpine

RUN apk add --no-cache nginx && \
    docker-php-ext-install mysqli pdo pdo_mysql

COPY app /var/www/html
COPY nginx/nginx.conf /etc/nginx/http.d/default.conf

RUN mkdir -p /var/run/nginx && \
    chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Start Nginx & PHP-FPM
CMD ["sh", "-c", "nginx && php-fpm"]
