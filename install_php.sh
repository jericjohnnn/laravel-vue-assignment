#!/bin/sh

# Update package lists
apt-get update

# Install PHP and necessary extensions
apt-get install -y php-cli php-mbstring

# Run Laravel Artisan commands
php artisan config:cache
