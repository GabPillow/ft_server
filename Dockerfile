FROM debian:buster

RUN apt-get -y update  && apt-get -y install nginx \
				mariadb-server \
				php \
				php-mysql \
				php-fpm
					
COPY srcs /

ENTRYPOINT  ["sh", "start_container.sh"]
