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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'samina' );

/** Database password */
define( 'DB_PASSWORD', 'pass@1234' );

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
define( 'AUTH_KEY',         'LoLnDVF2>D~1fpQ5|[;W&*qC5gib+n_v`sRN0=j3i;aK`mjsRM-BF@jS%7>|-$UN' );
define( 'SECURE_AUTH_KEY',  'DYB?my@rnZO=~91[?7zzU=X~3?&/<(clJ3I#O]`nE63{wlpl1/O%l^JSrWG1]sW<' );
define( 'LOGGED_IN_KEY',    'vmsN;(QjzIKQDu lN^:F`h~u{}~uPum/x9~OYQvH|H+*~<QxlN3S-2i(a pcFjGA' );
define( 'NONCE_KEY',        'j~S46V)Xv&6nT9aIL&m*abog.Se0-lJ;OchCE8EI[.c+bT-;+^qFb(l#-UOXW6C2' );
define( 'AUTH_SALT',        'Ttfu2]K~j}`5.>2m{CC|U_1YtAik*b%T^I>stvMAe$}<9o9x)=K>RoxH,s9k;g@|' );
define( 'SECURE_AUTH_SALT', 'A05JUA3qMBxdwfx*<>8&tUMO_yWXSQxr,]^ui3_$0C6>!qN48|6tH`EY$}>cc?0T' );
define( 'LOGGED_IN_SALT',   'Bw#8N%Hh3?b(:@~<V6gcS ~)Nu#g!X,%heIay22LQj2V}jbOh<-R~M(!E%svd>q~' );
define( 'NONCE_SALT',       'zhK&/yHeB10FIal$un2*vY27<F&^q`v($KB8?_aj$JXs`o4WXIueGr)8@gGcj^r!' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
define( 'FS_METHOD', 'direct' );

