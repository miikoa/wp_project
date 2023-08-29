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
define( 'DB_NAME', 'wp_project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'B^8:WX+H.x,IErh11d.|qs;tH-]cvl[yDt[6:| gDfupj6q9ycfs{b`{.0OAsl}I' );
define( 'SECURE_AUTH_KEY',  '_FCZC/2d&/;CSa1M;t)%/{C]wV(0z;JsO.$)c=$wEVERF!_XWm)Dy<Io?@1qHP=|' );
define( 'LOGGED_IN_KEY',    'yM6U!SycYyD%qiy6Zv8tg1axbJ0(=9Oy_L2/W>oOk&r0SKcMv1tMNe1.4E5SU4yc' );
define( 'NONCE_KEY',        'r)e+s9_sIER7(|i|KR2%6k7wb_^B31#lEa_1+.M1ChGeV]&Sjba%I];Cm6S.kzc.' );
define( 'AUTH_SALT',        '$CogVM+6ftt5PL@oS[Y8nEaO0yL|t2X,UL6B/ur.^N_1PkGz(]fT7`Ew2>6d0K/L' );
define( 'SECURE_AUTH_SALT', 'Q)$ttuLsC|6vP[71mF&!sLpA:bb10x)wKE9oh~g py<e$qq_<X=^e55Yn3;2K.<j' );
define( 'LOGGED_IN_SALT',   'DngvM%#pSS%F/Ld`85GXO[S1:`pXI~hK.t paI8#~YnG?-=Gf+]4?c0QL [}ABLb' );
define( 'NONCE_SALT',       'Z#9zjLGCCLa4u|R R->d.}v21k<lUBP5Ab~ROh(:ViVW#o%b4>$T,JmV.)CH)R=+' );

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
