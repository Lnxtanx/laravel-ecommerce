# Stage 1: PHP dependencies (Composer)
FROM composer:2.7 AS vendor

WORKDIR /app
COPY database/ database/
COPY composer.json composer.json
COPY composer.lock composer.lock
RUN composer install --no-interaction --no-plugins --no-scripts --no-dev --prefer-dist


# Stage 2: Frontend assets (NPM)
FROM node:20-alpine AS frontend

WORKDIR /app
COPY package.json package.json
COPY package-lock.json* package-lock.json
COPY vite.config.js* vite.config.js
COPY tailwind.config.js* tailwind.config.js
COPY postcss.config.js* postcss.config.js
COPY resources/ resources/
RUN npm install
RUN npm run build


# Stage 3: Final application image
FROM php:8.3-fpm-alpine

# Install system dependencies for Laravel and Nginx
RUN apk add --no-cache \
    nginx \
    supervisor \
    libzip-dev \
    zip \
    libpng-dev \
    jpeg-dev \
    freetype-dev \
    libwebp-dev \
    oniguruma-dev \
    libxml2-dev

# Install PHP extensions required by Laravel
RUN docker-php-ext-install -j$(nproc) \
    bcmath \
    pdo_mysql \
    zip

# Configure and install GD extension for image processing
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp
RUN docker-php-ext-install gd

WORKDIR /var/www

COPY . .
COPY --from=vendor /app/vendor/ /var/www/vendor/
COPY --from=frontend /app/public/build /var/www/public/build

# Create storage directories that might be gitignored
RUN mkdir -p /var/www/storage/framework/sessions \
             /var/www/storage/framework/views \
             /var/www/storage/framework/cache/data \
             /var/www/storage/logs

RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

COPY nginx.conf /etc/nginx/http.d/default.conf
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

RUN chmod +x /var/www/start.sh

EXPOSE 80

CMD ["/var/www/start.sh"]