FROM php:8.4-fpm

# Включаем нужные расширения
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Копируем php.ini
COPY php.ini /usr/local/etc/php/