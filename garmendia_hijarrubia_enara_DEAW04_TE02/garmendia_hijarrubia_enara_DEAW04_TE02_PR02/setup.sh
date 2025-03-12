#!/bin/bash

# Clonar los archivos de la carpeta mysql
git clone https://github.com/deaw-birt/UD4-despliegue-PHP.git temp_mysql
mv temp_mysql/mysql/InsertarDatos.sql ./mysql/02-InsertarDatos.sql
rm -rf temp_mysql

# Clonar los archivos de la carpeta php
git clone https://github.com/deaw-birt/UD4-despliegue-PHP.git temp_php
mv temp_php/php/dwes.css ./public_html/dwes.css
mv temp_php/php/index.php ./public_html/index.php
rm -rf temp_php

echo "Archivos clonados y movidos correctamente."
