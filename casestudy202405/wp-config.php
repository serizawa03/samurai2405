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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xs682415_wp5' );

/** Database username */
define( 'DB_USER', 'xs682415_m0f9p' );

/** Database password */
define( 'DB_PASSWORD', '97u1frkbls' );

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
define( 'AUTH_KEY',         'b%$S{hH#6;)IA,QK@qGke!A{S}U/$+Ze/.w@.=K2n2VT_-T}b/kF#w<1g?(7BM+z' );
define( 'SECURE_AUTH_KEY',  '$yJK40yf!rV$#-(fAVn5,Pu$IYK27f;KuFOb8|07{n8`sO`cwD6FjU/|!bA;6<X9' );
define( 'LOGGED_IN_KEY',    'wvQGKqv&<&>M f>Q=2GqzJ^7<U5,XR]f#C$EQpevS[!n0a53teUL5@>k&,bXzpI9' );
define( 'NONCE_KEY',        '*nevc,7uY#SgCh>=DB1PfKc^1wZ%4c&n6S.d&>e!<^TvHTb6C/PwO|jYJm|wv6Q@' );
define( 'AUTH_SALT',        'tSw<|o/^rIP@(2Eg(Z<.=<g2^6bA@M^CKmb;DzEe.imb+]gM4~h4L0i?k_2A).je' );
define( 'SECURE_AUTH_SALT', '4?!Keg-ZX%oNw}Zdxh.FfTx/GXtJiRclsBZoYDY-4!UV:1^OSl`:IrHFWiYh:jeg' );
define( 'LOGGED_IN_SALT',   '%H|awmJNI@Yw@WL>S@qs#.BF2C_,@*hFhlA/ig|I{^mW~!4.J9r]QbyXF4s~qjQt' );
define( 'NONCE_SALT',       'r@NxSZwTEeE4mM<Th{}ZH`>eOo)hRN~:%`>{t/j mp3TzHM^+4Ik@ F1psvGW&zI' );

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
