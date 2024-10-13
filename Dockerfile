FROM nginx:latest

# Копирование конфигурации Nginx
COPY ./config/nginx.conf /etc/nginx/conf.d/default.conf
COPY ./config/fastcgi-php.conf /etc/nginx/snippets/fastcgi-php.conf
