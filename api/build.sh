#!/bin/bash

# Vercel build script for Laravel
echo "🚀 Starting Laravel build for Vercel..."

# Install dependencies
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader

# Generate application key if not set
if [ -z "$APP_KEY" ]; then
    echo "🔑 Generating application key..."
    php artisan key:generate
fi

# Clear and cache config
echo "⚙️ Optimizing Laravel for production..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create storage link if needed
php artisan storage:link

# Run database migrations (optional, comment out if not needed)
# php artisan migrate --force

echo "✅ Laravel build completed successfully!"