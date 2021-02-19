<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lab_wp' );

/** MySQL database username */
define( 'DB_USER', 'daksh' );

/** MySQL database password */
define( 'DB_PASSWORD', 'daxdaxdax' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HM9|#l_]GzxDTu{B2dz,Iph<2!3A]oiwiA>j]EG;gu%thh=utzX02lW9Y]=`v=Tb' );
define( 'SECURE_AUTH_KEY',  'q%T&9Yh)ZQ|9vqVa|#JNpRki2>iAo7b/HyG=rK.lNRs..DgC|S;z]ZXX@]ad{D/=' );
define( 'LOGGED_IN_KEY',    'XCkPt2mCh`5PW}N&C=RWGI5BGgkfGpY yrJkp@Q6hMTpTt**o~Fe=nUYtK0<U?vV' );
define( 'NONCE_KEY',        '#/PQ5#Un_0zb)AZo%2!{.}EYA:qg6tjF36=U&4VEe>HVGW6aS@5#-_3A0XC>V5{_' );
define( 'AUTH_SALT',        'rJF+YBeX?-a[Q:l1a}Gkgr2=,g7[+z45IF!-Y*1U@ee;uj4Cl]JA(iS7-_c3g4YL' );
define( 'SECURE_AUTH_SALT', 'nA([;c*a<IbKB5._d=XQlS3yycmrJ%6d<JPZ`@+=kBu`93 1rF^#l[dtZ#c{Nu%$' );
define( 'LOGGED_IN_SALT',   '6iL&$*15,p<bdA0jV~*+I1}j/`bu|wT[V1Fsk~<_aQp|#m)?om=jUcia7abI<u;@' );
define( 'NONCE_SALT',       'mohm]mJ(+%^NZkI<JYD3.FNU-Bz#*!j7)+&S$IH{`htg9|LwCux_BuXFRy@n7Wx&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
