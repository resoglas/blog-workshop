FROM mariadb:10.10

ARG TZ=UTC
ENV TZ ${TZ}

USER root

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

COPY my.cnf /etc/mysql/conf.d/custom.cnf

USER mysql
