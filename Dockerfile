# Use the official PHP 8.2 FPM image as a parent image
FROM php:8.2-fpm

# Install system dependencies, including Nginx for serving the app
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions required by Laravel
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Set the working directory in the container
WORKDIR /var/www

# Get the latest version of Composer
COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

# Copy composer files first to leverage Docker's layer caching
COPY composer.json composer.lock ./

# Install Composer dependencies for production
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts

# Copy the rest of the application files into the container
COPY . .

# Copy our Nginx configuration and startup script
COPY .docker/nginx.conf /etc/nginx/sites-available/default
COPY .docker/start.sh /usr/local/bin/start.sh

# Make the startup script executable
RUN chmod +x /usr/local/bin/start.sh

# Set the correct permissions for the storage and bootstrap/cache directories
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose port 80 for Nginx. Render will automatically map its public port to this.
EXPOSE 80

# The CMD is now handled by the start.sh script, which will be set in Render's start command.
CMD ["/usr/local/bin/start.sh"]
