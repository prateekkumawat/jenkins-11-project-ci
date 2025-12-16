# base Image call for web based nginx server 
FROM php:8.5-rc-apache

# copy src code in nginx document root 
COPY src/ /var/www/html/

# EXPOSE port 
EXPOSE 80