# Utilise l'image officielle PHP avec Apache
FROM php:8.0-apache

# Active le module de réécriture pour Apache
RUN a2enmod rewrite

# Copie ton code PHP et Twig dans le dossier Apache
COPY . /var/www/html/

# Copie le dossier contenant Twig téléchargé dans le conteneur
COPY libs/twig /var/www/html/libs/twig

# Expose le port 80 pour accéder au site
EXPOSE 80

# Démarre Apache en mode premier plan
CMD ["apache2-foreground"]
