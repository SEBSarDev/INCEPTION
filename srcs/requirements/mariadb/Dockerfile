FROM debian:buster

RUN apt-get update && apt-get install -y mariadb-server procps

COPY ./conf/data.sql /root/data.sql
COPY ./conf/get_var.sh /get_var.sh
COPY ./conf/del_var.sh /del_var.sh
COPY ./conf/init_db.sql /home/init_db.sql
COPY ./start.sh /home/start.sh
COPY ./conf/my.cnf /etc/mysql/my.cnf
RUN chmod 755 /home/init_db.sql
RUN chmod 755 /home/start.sh
RUN chmod 755 /get_var.sh
RUN chmod 755 /del_var.sh
RUN chmod 755 /root/data.sql

RUN /etc/init.d/mysql start && mysql < /root/data.sql
RUN /etc/init.d/mysql stop
RUN mv /var/lib/mysql/aria_log_control /root/
ENTRYPOINT ["/home/start.sh"]
