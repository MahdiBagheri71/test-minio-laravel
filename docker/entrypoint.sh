#!/bin/bash

# Generate application key and run migrations and seeders
cd /var/www && php artisan migrate

# Start supervisord
/usr/bin/supervisord
