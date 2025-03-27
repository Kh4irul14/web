<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nn0$ffiKW|FKusbdlUEx@x%>+`J8x8GAB2P7<%k=rW2fiZQ;*f8Gi?y.1~4;lbG+' );
define( 'SECURE_AUTH_KEY',  'XGiD}wilIrUJ+XAgX{g/.SLX+7Tx<EzR79/:(N8?aW{bV<Tv?zZt}wNhWN9l8l[e' );
define( 'LOGGED_IN_KEY',    'iTuYDxU{jbMPX*Po!wT~A]=6W$2~&;%N$j5#6#0DwEqiv%`;$Fo&_CA),HtdF)0]' );
define( 'NONCE_KEY',        'k7?[jNpZcx<yA&^2DF_k8X^QlO}9&~;gqxGD6119=c{ {V+6!_/U)eQ9b)@`nWO6' );
define( 'AUTH_SALT',        '*~VXQb! )_axwO+j&}8.|g//W[Y)5EiH/UoTW}?5B<)5VI4Z^~Ks#2, WyK)(lSp' );
define( 'SECURE_AUTH_SALT', 'xFEhWvYc<}Fl~O0(V([50M_kv:y@.i|V-gFXtyBP83pU8#<WK>%17tx:;B1,~h)G' );
define( 'LOGGED_IN_SALT',   ')C.=VNT hjdps<,26YrBSefy=M=h=zO*|F$VGV`,Pr)wZ4qCx&ir<rUhit2Pc,HC' );
define( 'NONCE_SALT',       'Lcr%s#2W2fyM(?=iO:)WP|FZG6ny|Fz(Vp,FEOeJP>LxXEbk%eC!sH{2M.$UHNCR' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
