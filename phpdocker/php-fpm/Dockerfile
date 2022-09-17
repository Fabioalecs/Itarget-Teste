FROM phpdockerio/php:8.1-fpm
WORKDIR "/src"

ARG UID=1000
ARG GID=1000
ARG UNAME=user

RUN groupadd -g ${GID} -o ${UNAME}
RUN useradd -r -u ${UID} -g ${GID} -o -s /bin/bash ${UNAME}
RUN chmod 777 /run

RUN apt-get update; \
    apt-get -y --no-install-recommends install \
        git \
        php8.1-raphf \
        php8.1-bz2 \
        php8.1-http \
        php8.1-intl \
        php8.1-pgsql \
        php8.1-oauth \
        php8.1-psr \
        php8.1-swoole \
        php8.1-uuid \
        php8.1-xdebug; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

USER ${UNAME}