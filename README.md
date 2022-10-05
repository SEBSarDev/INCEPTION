# INCEPTION
Deepening of knowledge on Docker.

This project consists to deploy wordpress with Nginx, MariaDB and PHP, in a container, and thanks to docker-compose.
There is an image for each service (mariaDB, nginx, and wordpress) but they can works together. As each service is independent, they can be reused for other projects.

To use:
```
$ make
```
(That will create some directories for volumes in /home/ssar, and stock images, you can delete it if you dn't need anymore of the datas).
