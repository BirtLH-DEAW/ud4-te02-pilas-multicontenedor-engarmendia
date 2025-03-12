<?php

define( 'DB_NAME', 'froga' );
define( 'DB_USER', 'froga' );
define( 'DB_PASSWORD', 'froga' );
define( 'DB_HOST', 'mysql:3306' );

define( 'WP_HOME', 'http://localhost' );
define( 'WP_SITEURL', 'http://localhost' );

define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_CACHE', false );

define('WP_MEMORY_LIMIT', '512M');
define('WP_MAX_MEMORY_LIMIT', '512M');

// Cambiar los prefijos de la base de datos para mejorar la seguridad
$table_prefix  = 'wp_';

// Definir claves de seguridad (puedes generarlas aquí: https://api.wordpress.org/secret-key/1.1/salt/)
define('AUTH_KEY',         '9iIuO_E2`/3C[57-<MFl)7WR()v!$|ebB.->+SS2t?9I?h]s_v3cA<`A[d?dYy<9');
define('SECURE_AUTH_KEY',  '+}Jvfz<Q|RToWejUsEQ|A MpYPg$MMEJq+7=6_S+wq%`<*-dI2(UKk78am|-Rj.W');
define('LOGGED_IN_KEY',    'k6R]>SL~7[xS3^1DtR;0^`zohLC+*,[n?fa/:RKO^^w^t`gF3udmo1.1917ivp,!');
define('NONCE_KEY',        'PHE.;d7X|waAzCE!}e!A;&{S&`eK#$1f]hR#vs-n,mHmQW(NG&dWheX~(^5l~_f%');
define('AUTH_SALT',        '|U6J,~Jc4Ofw7~>l=`xVH4(2rM>PWo18]l6 kh?QjghB#oo|y?dq>^6Li-,}QKE,');
define('SECURE_AUTH_SALT', '7-X7X:Z(rHT%gd9;#Ae+J.Tb];d=JP?B]jb#W*}dVxE7,-x|L-E}[buAKIV>&4n|');
define('LOGGED_IN_SALT',   'Q|_lo5;)@Iv7Mb[a_:%pb|FYA7H7JN+244_Z/e{i-v#l[(M$(u;_cRX,j*H0>4mR');
define('NONCE_SALT',       '{Kzh2)A)X+7J@tzb0uhkZ8_t=V,m^Jq+=;2nmh04mcWMo/RvvyYV%3u1V`KV`k$.');

// ¡No modificar!
if ( !defined('ABSPATH') )
    define( 'ABSPATH', dirname(__FILE__) . '/' );

require_once(ABSPATH . 'wp-settings.php');

