# Use the official PHP image with Apache as the web server
FROM php:8.0-apache

# Install system dependencies (update package lists and install necessary packages)
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install zip pdo_mysql

# Enable Apache rewrite module (useful for routing URLs)
RUN a2enmod rewrite

# Set the document root of the web server to your application's public directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/

# Copy your application code into the container
COPY . $APACHE_DOCUMENT_ROOT

# Set the working directory for the container process
WORKDIR $APACHE_DOCUMENT_ROOT

# Expose the port Apache listens on (usually port 80)
EXPOSE 80

# Start Apache in the foreground (keeps the container running)
CMD ["apache2-foreground"]
# Use the official PHP image with Apache as the web server
FROM php:8.0-apache

# Install system dependencies (update package lists and install necessary packages)
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install zip pdo_mysql

# Enable Apache rewrite module (useful for routing URLs)
RUN a2enmod rewrite

# Set the document root of the web server to your application's public directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Copy your application code into the container
COPY . $APACHE_DOCUMENT_ROOT

# Set the working directory for the container process
WORKDIR $APACHE_DOCUMENT_ROOT

# Expose the port Apache listens on (usually port 80)
EXPOSE 80

# Start Apache in the foreground (keeps the container running)
CMD ["apache2-foreground"]
