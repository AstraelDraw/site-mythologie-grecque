# Utilise l'image officielle PHP avec Apache
FROM php:8.0-apache

# Active le module de réécriture pour Apache (utile pour les URL "propres")
RUN a2enmod rewrite

# Copie tout ton projet dans le dossier Apache
COPY . /var/www/html/

# Installe Composer (si tu utilises Composer pour gérer les dépendances)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installe les dépendances PHP de ton projet (si tu utilises Composer)
RUN composer install

# Expose le port 80 pour accéder au site
EXPOSE 80

# Démarre Apache en mode premier plan
CMD ["apache2-foreground"]
