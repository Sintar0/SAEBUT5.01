FROM php:8.0-apache

# Copie des fichiers HTML
COPY ../ /var/www/html/

# Mise à jour des packages et installation des dépendances
RUN apt-get update -qq \
    && apt-get upgrade -y -qq \
    && apt-get install -y -qq \
        wget \
        unzip \
        inetutils-ping \
    && rm -rf /var/lib/apt/lists/*

# Mise à jour de PHP vers la version 8.0
RUN docker-php-source extract \
    && docker-php-ext-install mysqli pdo_mysql \
    && docker-php-source delete

# Installation de PHPUnit
RUN wget https://phar.phpunit.de/phpunit-9.phar \
    && chmod +x phpunit-9.phar \
    && mv phpunit-9.phar /usr/local/bin/phpunit

# Mise à jour des droits sur le dossier
CMD ["chmod +x /var/www/html/tests/vendor/bin/phpunit tests"]

# Démarrage du serveur Apache
CMD ["apache2-foreground"]

