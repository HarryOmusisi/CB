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
define( 'DB_NAME', 'wp_pic78' );

/** Database username */
define( 'DB_USER', 'wp_nckaw' );

/** Database password */
define( 'DB_PASSWORD', '3rur5pI#gf*d_Gr8' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'c7~463:GB8sU9N]y+AmO37jXfn64%zT#979Ood2*6qx2T#4D6luXiCp-08@IsdNi');
define('SECURE_AUTH_KEY', 'M6@Z)2b5rA0547/]5loC!P4n;2BK%qqWx*5(77If9gl(OPd35ZOT29#A6_UUX0TO');
define('LOGGED_IN_KEY', 'eMR8Nq(6#TdC7Ef~r/QY]4;4~+(Lgt+Mr_b:l5m83bKr1s&)~;]X[k|Q-*;m1_D7');
define('NONCE_KEY', 'Jo%Qq|0)7J)t|44bT@S]v]mzwN9E%9e&+!kJVZ&8W-1c9k&s)2F3-4Q@fHNs2W!N');
define('AUTH_SALT', 'Q7t03-rAnP9p*7pY@R8ItKP2pGVZ4(33P#XPCK78%9yT*:!E5F;9!r0&:0&wJ52U');
define('SECURE_AUTH_SALT', '30i@VDJRg-~U93Xt3x2x||uZK#q5Wq!(eLZ:7egC~u]09@ZHE*-i&2)r~_96stk9');
define('LOGGED_IN_SALT', '[LRQLPJ4kdp*Bg9bg*_l&d77CM+3)TDPc!P7Y0(/DC7(0[8e&):i(071Bt!8z3&e');
define('NONCE_SALT', '3&D+u[34/OP)_Lq[0[4cJ2&0j@_Pwbm09*[5+9gNza1ITOc6WZlQ%[Ce8UJTy*AE');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'v2xKfmHxQ_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
