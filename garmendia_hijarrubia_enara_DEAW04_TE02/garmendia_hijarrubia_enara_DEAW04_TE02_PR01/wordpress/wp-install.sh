#!/bin/bash

# Esperar a que MySQL esté disponible
echo "Esperando a MySQL..."
/wait-for-it.sh mysql:3306 --timeout=60 --strict -- echo "MySQL disponible"

# Verificar permisos en WP-CLI
mkdir -p /var/www/.wp-cli/cache
chown -R www-data:www-data /var/www/.wp-cli
chmod -R 755 /var/www/.wp-cli

# Verificar si WordPress ya está instalado
if ! wp core is-installed --path=/var/www/html --allow-root; then
    echo "Descargando WordPress..."
    wp core download --path=/var/www/html --allow-root

    echo "Instalando WordPress..."
    wp core install \
        --url="http://localhost" \
        --title="enarius web" \
        --admin_user="enarius" \
        --admin_password="enariusKey" \
        --admin_email="enarius@hotmail.com" \
        --skip-email \
        --path=/var/www/html \
        --allow-root

    # Configurar URL correctamente
    wp option update siteurl "http://localhost" --path=/var/www/html --allow-root
    wp option update home "http://localhost" --path=/var/www/html --allow-root

    # Ajustar permisos
    chown -R www-data:www-data /var/www/html
    chmod -R 755 /var/www/html

    echo "WordPress instalado y configurado correctamente."
else
    echo "WordPress ya está instalado."
fi

# Mantener el contenedor corriendo
exec apache2-foreground


