# Stage build
FROM php:8.1-fpm AS build
WORKDIR /app


# Install system dependencies
RUN apt-get update && apt-get install -y \
git \
unzip \
libzip-dev \
libonig-dev \
libxml2-dev \
zip \
curl \
libpng-dev \
libicu-dev \
libpq-dev \
&& docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd


# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer


COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-interaction --no-scripts --optimize-autoloader


COPY . .
RUN php artisan key:generate


# Stage runtime
FROM php:8.1-fpm
WORKDIR /app


RUN apt-get update && apt-get install -y libpng-dev libonig-dev zip unzip
COPY --from=build /usr/local/etc/php/conf.d /usr/local/etc/php/conf.d
COPY --from=build /app /app


# Set permissions (adjust as needed)
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache


EXPOSE 9000
CMD ["php-fpm"]
