FROM php:8.2-apache

# Install mysqli and enable it
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy our PHP app into the Apache server directory
COPY index.php /var/www/html/



