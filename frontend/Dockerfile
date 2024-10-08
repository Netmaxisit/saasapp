FROM nginx:alpine

# Install PHP 8 and PHP-FPM (FastCGI Process Manager)
RUN apk add --no-cache php8 php8-fpm php8-mysqli php8-json php8-session

# Copy the static files and PHP files
COPY . /usr/share/nginx/html/

# Copy the NGINX configuration
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Start PHP-FPM when the container starts
CMD ["sh", "-c", "php-fpm8 && nginx -g 'daemon off;'"]

# Expose port 80
EXPOSE 80
