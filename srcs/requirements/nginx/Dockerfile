#image base
FROM debian:buster

#installe nginx wget et procps. wget servira essentiellement a supporter les tlechargement passant par http, procps pour gerer les signaux, openssl pour generer cle securite
RUN apt-get update && apt-get install -y nginx wget procps openssl

#place le fichier de configuration dans le container
COPY ./conf/nginx.conf /etc/nginx/sites-available/nginx.conf

#cree un lien symbolique entre les sites disponibles, ils ont ainsi la meme config et suprimer l'ancienne config
RUN ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/nginx.conf
RUN rm /etc/nginx/sites-enabled/default

#cree le certificat pour plus de securite
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
	-keyout /etc/ssl/private/localhost.key \
	-out /etc/ssl/certs/localhost.crt \
	-subj "/CN=ssar"

#donne les droit d'acces
RUN chown -R www-data:www-data /var/www/

# execute en deamon off pour pouvoir le faire tourner sans arret (a combiner avec un exec)
CMD ["nginx", "-g", "daemon off;"]

#seul point d'entree demande
EXPOSE 443
