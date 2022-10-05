FROM debian:buster

RUN apt-get update && apt-get upgrade -y && apt-get install -y wget procps \
	php-fpm php-mysql php-cli php-gd php-curl

#permettra d'utiliser les commandes cli
#RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
#	&& chmod +x wp-cli.phar \
#	&& mv wp-cli.phar /usr/local/bin/wp

RUN mkdir -p /var/www/wordpress
RUN chmod 755 /var/www/wordpress
RUN wget https://fr.wordpress.org/latest-fr_FR.tar.gz \
	&& tar -zxvf latest-fr_FR.tar.gz \
	&& rm -rf latest-fr_FR.tar.gz \
	&& mv wordpress /var/www/

RUN chmod 755 -R /var/www/wordpress
RUN chown -R www-data:www-data /var/www/wordpress

RUN rm -f /var/www/wordpress/wp-config-sample.php
COPY ./conf/set_wordpress.php /var/www/wordpress/wp-config.php

COPY ./conf/config-www.conf /etc/php/7.3/fpm/pool.d/www.conf
RUN mkdir -p /run/php

COPY ./start.sh /home
RUN chmod 755 /home/start.sh
CMD ["bash", "/home/start.sh"]
