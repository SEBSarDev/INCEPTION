#!/bin/bash

/get_var.sh
/etc/init.d/mysql start && mariadb -u root < /home/init_db.sql
/etc/init.d/mysql stop
/del_var.sh
lsof -t '/var/lib/mysql/aria_log_control' > thepid
cat thepid | xargs kill
rm /var/lib/mysql/ib_logfile0
rm /var/lib/mysql/ib_logfile1
exec mysqld --datadir="/var/lib/mysql"
