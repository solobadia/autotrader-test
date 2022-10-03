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
define( 'DB_NAME', 'wp_autotrader' );

/** Database username */
define( 'DB_USER', 'autotrader' );

/** Database password */
define( 'DB_PASSWORD', 's5I7s@CeRd' );

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
define( 'AUTH_KEY',         '2?~?jTQW`[Z_./WAKDr>!I+)]L |CixSjnl`CnL@)4QE.>.a.?<1d%beHM[OA:mm' );
define( 'SECURE_AUTH_KEY',  'Fs7Fj,/2P4X5K|%MgOcCZ8{lpY]XNfpAi]{!0rp:E/)=3tliK8RgD^a+4_J4-Jx]' );
define( 'LOGGED_IN_KEY',    '04$b_H;|E*5x=IY;+.x1V|VEu&+^6c2Hwh<-`Gh;rMVW8%Vl+>$7uuoBg-#RaB9c' );
define( 'NONCE_KEY',        '$0nuCv6=n6|^%C=u71Q4%Pdr_)f-RAsXB0R9K31py{x<_(+MAy:OC3]x)(avM4hf' );
define( 'AUTH_SALT',        '(kFPMnxA?6t<@-~0*^w=XvlE)F!6SY(cQV5$/4uw)<XhZN<@}L&L:I5l8E~ YmFW' );
define( 'SECURE_AUTH_SALT', '0&LUkzcLoNU+mn_B5yowt?mZ_:Y1Jt`1$kT)F;c2,hnj(kTs^R?ksL:eQ_.$P<X ' );
define( 'LOGGED_IN_SALT',   'u(kk8SK0JK]KFgyqX3vKb<$AWa1K?8q]zb0m@Fq0^sW?cus<zcC&TE?UCbvZ>TCH' );
define( 'NONCE_SALT',       'CEd)!<,q)`_gO7_&c%RG=o}b!kJNp`*`;+]|]]0v*qdUL%p++qIU/simUsVT++~>' );

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
