# base Image call for web based nginx server 
FROM nginx:latest

# copy src code in nginx document root 
COPY src/ /usr/share/nginx/html/ 

# EXPOSE port 
EXPOSE 80