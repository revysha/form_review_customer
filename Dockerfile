FROM php:8.0-alpine
RUN apt-get update && apt-get upgrade -y && docker-php-ext-install mysqli

#ports
EXPOSE 80 5000