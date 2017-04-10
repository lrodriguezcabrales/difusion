<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpressunir');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'araujo123');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '-hEO/>_p}{k}(!TF| G}qjb&.s8]Q_)[UW4j`D_K$}rLx w~ZdLp(+NN+Y.tB8kY');
define('SECURE_AUTH_KEY', '[Bn6Y>4o+&6>{@~ttgN7r1FZ(]`qCdwY};Fi)giX<}uR^ApC;Lm:goC__UikN;sy');
define('LOGGED_IN_KEY', 'eiI~BS_efa^z87H6%3H|<K=acH/R)Bazn;z;^o2uwoD gzvgL1;i$5C7rs^%wz<B');
define('NONCE_KEY', 'P TC]?;X<D(n>|@_/S{`)5N.@>rO,7xAJ#q0#/y2WAv$WPdO(x.s8$J^! ?&LHfZ');
define('AUTH_SALT', 'aE3wG4De!1gFE8vTgIU87X$HDMZ7yp(w.n5J.9FDaml@wP/8dw$r #j$O>}1xQRH');
define('SECURE_AUTH_SALT', '3T,jMi9DuT3)W;1GXVuO6#._? SvhY0}1TXIo GhUS>ZkN7ozd^[YaEe0S|9f$UK');
define('LOGGED_IN_SALT', '3,(m]SoG|L!jP7A~0D,PQMPXw;f<Rb?psa},1On1+;gG83Izd[QZfDbh7,BR:96V');
define('NONCE_SALT', ':{]F*c!A;>,[,hr+2Ux<YMV|E?U#+[rbp`@ktmdTLdMe`[*H}*}v1:K_q4v@Y;(5');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_unir';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

