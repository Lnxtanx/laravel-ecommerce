#!/bin/sh

set -e

echo "Running database migrations..."
php artisan migrate --force

echo "Starting application..."
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf