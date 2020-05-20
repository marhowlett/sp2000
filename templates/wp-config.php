<?php

// BEGIN iThemes Security - No modifiques ni borres esta línea
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Desactivar editor de archivos - Seguridad > Ajustes > Ajustes WordPress > Editor de archivos
// END iThemes Security - No modifiques ni borres esta línea

define( 'WP_CACHE', true );    // Added by WP Rocket.

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
define('DB_NAME', 'admin_natural');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'admin_tanya');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '9XLPCAa97x');

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
define( 'AUTH_KEY', ' vG|;b6@jWu^)S)*DTMtK)hZV5[&|Tk*>.~e6p?-xkrH[Wzd>k|NGstY`2JDRP8t' );
define( 'SECURE_AUTH_KEY', 'pB8qm*s&~/ 4lnc#dT,,iXeb26h0$P<wIAmyQ!@6eg^$Wn}x_)Se.Z/wcl-?g0ja' );
define( 'LOGGED_IN_KEY', '3~&1yqDxr>[V@jC8P-.W5) P_3@b=QGu@]ips,g*PksgWN(q.lHGXqL`N`j$v~.R' );
define( 'NONCE_KEY', '8Cqa,:6DH30Rfi&=am^#}@M[%$;pWPhqJlGyern4)}VVrp<Zt*&fXY0~Y/OS4)=-' );
define( 'AUTH_SALT', 'M3<KcnpJ:d6y|HKBJ,i()yY7%(R7M,r{zs~&y~{GOPTh25;!*Bq.&47[)`S3V^4y' );
define( 'SECURE_AUTH_SALT', 'oF3@My@Ribi(|<e$hA`x%qNPLw(eUB1j?0N-?bgs+;me=_)[GAhgbNuEy2xF<vO[' );
define( 'LOGGED_IN_SALT', 'QPA ] {Xd`v&,RH+7<bVbzLcuX:m<Ks|vb@=hpH!XNFO_jwYc &/JflU}p+<tgM=' );
define( 'NONCE_SALT', '891:FacVegl#AFk%vA;l^2oh >[8vre&#E<Q8:id2,>KQizVr[O51&Q$+7=HX<D?' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';

define( 'DISALLOW_FILE_EDIT', true );


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

