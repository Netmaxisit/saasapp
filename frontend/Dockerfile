FROM nginx:alpine

# Copy the static files
COPY . /usr/share/nginx/html/

# Copy the NGINX configuration
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Expose port 80
EXPOSE 80