# Usar la imagen oficial de WordPress como base
FROM wordpress:latest

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    curl \
    git \
    less \
    vim \
    unzip \
    netcat-openbsd \
    && rm -rf /var/lib/apt/lists/*

# Instalar WP-CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x wp-cli.phar \
    && mv wp-cli.phar /usr/local/bin/wp

# Habilitar mod_rewrite para Apache
RUN a2enmod rewrite

# Copiar archivos de configuración
COPY wp-config.php /var/www/html/wp-config.php
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY wait-for-it.sh /wait-for-it.sh
COPY wp-install.sh /wp-install.sh
RUN chmod +x /wait-for-it.sh /wp-install.sh

# Ejecutar comandos como root para evitar problemas de permisos
USER root

# Crear la carpeta de WP-CLI con permisos correctos
RUN mkdir -p /var/www/.wp-cli/cache \
    && chown -R www-data:www-data /var/www/.wp-cli \
    && chmod -R 755 /var/www/.wp-cli

# Copiar archivo de configuración PHP y modificar el límite de memoria
RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini && \
sed -i 's/memory_limit = 128M/memory_limit = 512M/' /usr/local/etc/php/php.ini

# Dar permisos correctos a WordPress
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Cambiar al usuario www-data para ejecutar WordPress
USER www-data

# Ejecutar el script de instalación y luego iniciar Apache
CMD /wp-install.sh && apache2-foreground
