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
define('DB_NAME', 'wp_sala_420');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', '>TRtPdEqgd9Mpay&j|TIjwpW8XZ(?xCAd<}ZR8A?QD]bhw:?5+i&N[40PzApGdj ');
define('SECURE_AUTH_KEY', 'TK?!T|8.`]aH@l=Uw28Z=DOO}Yg,[lW[FEk+=?L$l&{ec/ -pv$LNlT_@dL*0W@n');
define('LOGGED_IN_KEY', '5{q>X8Egz*rqn NjAu&XVdWwO|>k`+2OvV*._#i4CghG7`+W|4hq`E9hknl#/Mt~');
define('NONCE_KEY', 'dFIodm=er9hGEyJGJvJ^P{>u)^]V{gNoy1-u.k#;}p ,![<tO@%7P)uskZPbz$>+');
define('AUTH_SALT', '9jgg5TZh=|O>-,$U^eq}LO/l[}y>(,|HqdgnXYqU+:l&;p6K;1 aPDqdbSEG30)[');
define('SECURE_AUTH_SALT', 'i]F9A(:Y]V?KQYbF 4}RfhWqZZm&;5mp,ZUWGB7t5q{XoZa%<nTiR%>/QK0Qp!Sb');
define('LOGGED_IN_SALT', ' .OyqAj],Oe=>oXXB.],KO]kDo7XWcI:}VRa,FSG%1Ob3&Z)?3ZkS=8#`l>e UnR');
define('NONCE_SALT', 'QLB6J@QWIYqh;9cA|&Lr%>#wEwX-cK,N&4 %}AJdw_L9Z7AjA%UH$j1 5xG)P7Hm');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);
define('WP_POST_REVISIONS', 2 );
/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

