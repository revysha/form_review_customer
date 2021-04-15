#Image Dasar untuk operasi Dockerfile
FROM php:8.0-apache

# Update and Upgrade Package
RUN apt-get update && apt-get upgrade -y
# Add php plugin for mysqli
RUN docker-php-ext-install mysqli

#ports
EXPOSE 80 5000