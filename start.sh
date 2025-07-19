#!/bin/sh

set -e

echo "Clearing previous application caches..."
php artisan optimize:clear

echo "Caching configuration for production..."
php artisan config:cache

echo "Running database migrations..."
php artisan migrate --force

echo "Starting application..."
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf