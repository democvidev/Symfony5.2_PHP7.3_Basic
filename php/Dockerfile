FROM php:7.3.3-apache

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN apt-get update \
    && apt-get install -y --force-yes --no-install-recommends locales wget bash git cron g++ gettext libicu-dev openssl libc-client-dev libkrb5-dev  libxml2-dev libfreetype6-dev libgd-dev libmcrypt-dev bzip2 libbz2-dev libtidy-dev libcurl4-openssl-dev libz-dev libmemcached-dev libxslt-dev

RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen && \
    echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen && \
    locale-gen

# PHP Configuration

RUN curl -sSk https://getcomposer.org/installer | php -- --disable-tls && \
   mv composer.phar /usr/local/bin/composer



RUN docker-php-ext-configure intl
RUN docker-php-ext-configure gd --with-freetype-dir=/usr --with-jpeg-dir=/usr
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl
RUN docker-php-ext-configure zip --enable-zip --without-libzip
RUN docker-php-ext-configure hash --with-mhash
RUN docker-php-ext-install bcmath bz2 dba exif fileinfo gettext imap soap tidy xmlrpc sockets pdo pdo_mysql mysqli opcache intl zip calendar dom mbstring zip gd xsl
RUN pecl install apcu && docker-php-ext-enable apcu

EXPOSE 80

# Apache Configuration
RUN a2enmod rewrite
RUN a2enmod headers

# SSL
RUN a2enmod ssl
RUN a2ensite default-ssl
RUN openssl req -subj '/CN=example.com/O=My Company Name LTD./C=US' -new -newkey rsa:2048 -days 365 -nodes -x509 -keyout /etc/ssl/private/ssl-cert-snakeoil.key -out /etc/ssl/certs/ssl-cert-snakeoil.pem


RUN wget https://get.symfony.com/cli/installer -O - | bash && mv /root/.symfony/bin/symfony /usr/local/bin/symfony

WORKDIR /var/www/