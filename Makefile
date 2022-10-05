VOLUMES_ID=${shell docker volume ls -q}
IMAGES_ID=${shell docker images -q}
CONTAINERS_ID=${shell docker ps -aq}
NETWORKS_ID=${shell docker network ls -q}

all:
	sudo /etc/init.d/mysql stop
	sudo /etc/init.d/nginx stop	
	sudo userdel -f www-data && sudo useradd -u 82 www-data
	sudo mkdir -p /home/ssar/data
	sudo mkdir -p /home/ssar/data/wordpress
	sudo mkdir -p /home/ssar/data/mariadb
	sudo chown -R mysql:mysql /home/ssar/data/mariadb
	sudo chown -R www-data:www-data /home/ssar/data/wordpress
	sudo chmod -R 755 /home/ssar/data/mariadb
	sudo chmod -R 755 /home/ssar/data/wordpress
	sudo sed -i "1i\127.0.0.1\tssar.42.fr" /etc/hosts
	sudo docker-compose -f srcs/docker-compose.yml up --build -d
fclean:
	sudo docker-compose -f srcs/docker-compose.yml down
	sudo /etc/init.d/mysql start
	sudo /etc/init.d/nginx start	
	sudo rm -rf /home/ssar
	sudo sed -i "/.42.fr/d" /etc/hosts
	sudo docker rmi ${IMAGES_ID}
	sudo docker volume rm srcs_mariadb_volume srcs_wordpress_volume

cleanc:
	docker rm -f ${CONTAINERS_ID}
cleani:
	docker rmi ${IMAGES_ID}
cleanv:
	docker volume rm ${VOLUMES_ID}
cleann:
	docker network rm ${NETWORKS_ID}

.PHONY : all fclean cleanc cleani cleanv cleann
