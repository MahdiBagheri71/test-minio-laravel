#!/bin/bash

# Generate application key and run migrations and seeders
cd /var/www && composer create-project laravel/laravel html

# Start supervisord
/usr/bin/supervisord
