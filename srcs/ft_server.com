server {
	listen 80;
	listen [::]:80;
	server_name localhost;
	return 301 https://$server_name$request_uri;
}

server {
	listen 443 ssl http2;
        listen [::]:443 ssl http2;

	ssl_certificate /ssl/server.crt;
        ssl_certificate_key /ssl/server.key;

	server_name localhost;
	
	autoindex on;

        root /var/www/ft_server.com;
        index index.php index.html index.htm;

        location / {
                try_files $uri $uri/ =404;
        }
	
	location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php7.3-fpm.sock;
    }
}
