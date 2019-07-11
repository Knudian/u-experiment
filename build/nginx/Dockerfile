FROM nginx:stable
ADD nginx.conf /etc/nginx/
ADD default.conf /etc/nginx/sites-enabled/
RUN usermod -u 1000 www-data
#CMD ["ls", "-lah", "/etc/nginx/conf.d"]
#CMD ["cat", "/etc/nginx/conf.d/default.conf"]
#CMD ["service", "nginx", "restart"]
EXPOSE 80
EXPOSE 443
