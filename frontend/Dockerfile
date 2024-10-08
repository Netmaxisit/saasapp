FROM php:8-fpm-alpine

# Install NGINX
RUN apk update && apk add --no-cache nginx

# Copy static files and NGINX configuration
COPY . /usr/share/nginx/html/
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Expose port 80
EXPOSE 80

# Start NGINX and PHP-FPM
CMD ["sh", "-c", "php-fpm && nginx -g 'daemon off;'"]
