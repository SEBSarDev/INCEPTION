#!/bin/bash

sed -i "s/${WP_DATABASE}/WP_DATABASE/g" /home/init_db.sql
sed -i "s/${WP_ADM}/WP_ADM/g" /home/init_db.sql
sed -i "s/${WP_PWD_ADM}/WP_PWD_ADM/g" /home/init_db.sql
sed -i "s/${WP_USER}/WP_USER/g" /home/init_db.sql
sed -i "s/${WP_PWD_USER}/WP_PWD_USER/g" /home/init_db.sql
sed -i "s/${MYSQL_ROTT_PWD}/MYSQL_ROOT_PWD/g" /home/init_db.sql
