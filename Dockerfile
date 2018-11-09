FROM composer:1.7 as composer
FROM php:7.2-apache-stretch

# Install composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# Install dependencies
RUN apt-get update \
    && apt-get install -y gnupg \
    && curl -sL https://deb.nodesource.com/setup_11.x | bash - \
    && apt-get install -y moreutils nodejs zlib1g-dev \
    && docker-php-ext-install zip  

# Copy sources in container
COPY . /var/www/html/

# Change document root
RUN sed -i 's|/var/www/html|/var/www/html/src/public|g' /etc/apache2/sites-enabled/000-default.conf

# Run installation script
RUN make install
