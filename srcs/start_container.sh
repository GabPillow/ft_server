#!/bin/sh
#Make NGINX run in foreground (Container will stay up)
echo "daemon off;" >> /etc/nginx/nginx.conf

#Config nginx
mkdir /var/www/ft_server.com
cp ft_server.com /etc/nginx/sites-available
ln -s /etc/nginx/sites-available/ft_server.com /etc/nginx/sites-enabled/

#Move Wordpress & PHPmyAdmin(already configured) 
mv wordpress /var/www/ft_server.com
mv phpmyadmin /var/www/ft_server.com

#Start and conf mysql
service mysql start
echo "CREATE DATABASE wordpress;" | mariadb
echo "CREATE USER 'wordpress'@'localhost';" | mariadb
echo "SET password FOR 'wordpress'@'localhost' = password('1234');    " | mariadb
echo "GRANT ALL ON wordpress.* TO 'wordpress'@'localhost' IDENTIFIED BY '1234';" | mariadb
echo "FLUSH PRIVILEGES;" | mariadb
mariadb wordpress < wordpress.sql

#RUN PHP
/etc/init.d/php7.3-fpm start

service nginx start
