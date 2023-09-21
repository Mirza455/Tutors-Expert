<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'y$1Xp_WU.a0DmhRY::]Y V;)l:O5-bAB&k)P3SF<Jz-%z4R:dKU.RvR?I;|%97l9' );
define( 'SECURE_AUTH_KEY',  '_|J|S]sFtA+XDy]5;i}9=9tc%[:1VRhWwa.Z^L1[#t[0L/1]g*0UwgkS6kWN$/P(' );
define( 'LOGGED_IN_KEY',    'LL:M+DN&#sJK5z)#(;/0NcX%V#y+{toT`oRkT/sIkC`WB2G.lZwc`!D$,BB|kj{.' );
define( 'NONCE_KEY',        'heu~@Wi?C$`%q8?ZC<_JXGd6vmIs=#f)S2jq@bB+t7RgiqH;f*0#ixO{Moh>Vhg#' );
define( 'AUTH_SALT',        'S[}5[cjr:CtnR9._PepHeP$oj!+IY]3FcktF7A0/qc(1Du|;ES$*p/.9omPP5l^>' );
define( 'SECURE_AUTH_SALT', 'Xg;RTAe~rnq*)(w}J5@[qa*)Xqrf-KUgBZ}T;M!.$M)fY,Vb?wi%9!IxtJ<qN0bg' );
define( 'LOGGED_IN_SALT',   'Fu1ddHEYV>F}F()6=;Dh4}>VCjdAsH`:IC.x2?*nF%1~ KaM%:sh,~vgStuL:>Rr' );
define( 'NONCE_SALT',       '^xjU<A|.hdK&`Af)>BhVsubh(pHIo9`(!,q!QtOxP7:h/}7<)+eu:`0.f/19UG+L' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
