FROM nginx:alpine

# Add edge/testing repository for PHP 8.x
RUN echo "https://dl-cdn.alpinelinux.org/alpine/edge/testing" >> /etc/apk/repositories && \
    echo "https://dl-cdn.alpinelinux.org/alpine/edge/community" >> /etc/apk/repositories && \
    apk update

# Install PHP 8.x and necessary extensions
RUN apk add --no-cache php8 php8-fpm php8-mysqli php8-json php8-session

# Copy static files and PHP files
COPY . /usr/share/nginx/html/

# Copy NGINX configuration
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Start PHP-FPM and NGINX
CMD ["sh", "-c", "php-fpm8 && nginx -g 'daemon off;'"]

# Expose port 80
EXPOSE 80
