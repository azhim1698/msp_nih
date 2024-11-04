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
define( 'DB_NAME', 'msp_nih' );

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
define( 'AUTH_KEY',         'y62Qo2QGI$TMtq-,Q+X4xzRw2z%9*_b+-PfG7YDj:vy~cKoux.8bR0x:|T<9Z(!K' );
define( 'SECURE_AUTH_KEY',  'Z0u*KtC9?TP3:X6 Ay ds=TdrWibXn/:Re{>S9dZmG$FO)R=~Wd-{U&xJh] $m/A' );
define( 'LOGGED_IN_KEY',    '.>ZYyb{FrZH_*GH>fSU]-Tl[fsp62_xL+!8n&JtbxV@i x}>6&DNzP}UoWQLa1`,' );
define( 'NONCE_KEY',        '^rx03*u%PF>1mMiu(,NA0( 5$Cv/3?$8>(qTcPzkL_Y;l~E(_$RO mJ,Vv^<_oY?' );
define( 'AUTH_SALT',        'K5u:^/Rl[u%RJH+L8/v17VdW8-f `%;mWd?aGvuEC/z>*&2,/J+^+1w6a yM UT5' );
define( 'SECURE_AUTH_SALT', 'nGoH5vPjspOUTeHg0#gGvx%Z}08/5&vV5+WAPsa$@Sk8yEOzQan&W%2EdW~]hBK&' );
define( 'LOGGED_IN_SALT',   '[8oMTl`MXKzT{pA%|^X_0=^.h,uDh @V+fHt]VRxF%BtW[!R9/71cS4)!)UBE)g1' );
define( 'NONCE_SALT',       ':.n]U+sFXHa3rd$nM?3H7!8L+Lgv8;|;5;pn;bNGRekHq8f5J7T+U-lqjPsM%/D7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'msp';

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
