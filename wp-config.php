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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          't[L&;9XU}-S*$w@&LC*tchW;OM|d]+Yc:CMx%Wlh0@9Sf{Fz(6b4]j[b<ep?3`f-' );
define( 'SECURE_AUTH_KEY',   'OTw-;vZ6?o!(JG5r=c6cn&*NG9.q@:f[]f_-lR6HE9~1HS4lKC1={AwtB5Bb6z;H' );
define( 'LOGGED_IN_KEY',     '7%eXFaV!0ve8Egfgvy&<>anvx!,AwZ,7!)zbeM`02f9wQeWr0,IouG7qJ=&`pDPe' );
define( 'NONCE_KEY',         '/<>%T&JvlsBWK}53gTL4A>pw93:y2]a%xcON$ti62|?p^ m~D?1[KfaG@7%+tIgk' );
define( 'AUTH_SALT',         'gLd&-_f81vn0sB]F,r@3o1]_3#as}A1s6e|^$}infeYR3 DS&hUQm e+|IJ.zasS' );
define( 'SECURE_AUTH_SALT',  'x;^@ra@bT]>eI>a8DHdROz+e[d}tyB5(0[9}?Xi6bxip5<M!Qg9aaha5nQ7is&mR' );
define( 'LOGGED_IN_SALT',    '5`/A{*w.EoC?7f4TNFmrnf4<]N,UfDA9G ,iG&uesVa9^qD.D)EU:U&KgG`^t)6|' );
define( 'NONCE_SALT',        'u`H1Ah:T5/mNSrOe;(nz_o(kJmQX.*@Y(]sREE1rS<S->@{Ln4^<=(>,CT1dSqT2' );
define( 'WP_CACHE_KEY_SALT', '9^>e0 $IHOr4WF*/I>V}FljmT6t4p5R~0$XEEi~ 7.ueSduA9X*~jsnYbMHup~De' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
