# ==============================================================================
# Stage 1: Build Frontend Assets with Node.js & Vite
# ==============================================================================
FROM node:20-alpine AS frontend

WORKDIR /app

# Copy dependency definitions
COPY package.json package-lock.json ./
RUN npm ci

# Copy source assets and configuration
COPY vite.config.js ./
COPY resources ./resources
COPY public ./public

# Build compiled production assets to public/build
RUN npm run build

# ==============================================================================
# Stage 2: Production Runtime (PHP 8.3 FPM + Nginx + Supervisor on Alpine)
# ==============================================================================
FROM php:8.3-fpm-alpine

# Install system dependencies, Nginx, Supervisor, and PHP build dependencies
RUN apk add --no-cache \
        nginx \
        supervisor \
        curl \
        libpng \
        libjpeg-turbo \
        freetype \
        oniguruma \
    && apk add --no-cache --virtual .build-deps \
        $PHPIZE_DEPS \
        libpng-dev \
        libjpeg-turbo-dev \
        freetype-dev \
        oniguruma-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
    && apk del .build-deps

# Install Composer from official image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy application source code
COPY . .

# Copy compiled frontend assets from frontend stage
COPY --from=frontend /app/public/build ./public/build

# Install PHP dependencies without dev packages and optimize autoloader
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# Configure Nginx and Supervisor
COPY docker/nginx.conf /etc/nginx/http.d/default.conf
COPY docker/supervisord.conf /etc/supervisord.conf

# Setup required directories, log paths, and permissions
RUN mkdir -p /run/nginx \
             /var/log/supervisor \
             storage/framework/sessions \
             storage/framework/views \
             storage/framework/cache \
             storage/logs \
             bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 80

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
