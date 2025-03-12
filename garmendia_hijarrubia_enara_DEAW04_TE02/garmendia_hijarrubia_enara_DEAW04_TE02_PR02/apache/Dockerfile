# Usa la imagen base de PHP 7.4 con Apache
FROM php:7.4-apache

# Copia el contenido del directorio /var/www/html de la imagen base de PHP a la misma ubicación en la nueva imagen
COPY --from=php /var/www/html /var/www/html

# Instala la extensión mysqli, necesaria para conectarse a bases de datos MySQL
RUN docker-php-ext-install mysqli

# Copia la configuración del sitio de Apache desde el archivo local 000-default.conf al directorio de configuración de Apache
COPY 000-default.conf /etc/apache2/sites-available

# Expone el puerto 80 para que el contenedor pueda recibir tráfico HTTP
EXPOSE 80
