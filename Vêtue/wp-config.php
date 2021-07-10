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
define( 'DB_NAME', 'vêtue' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Rb_tPS!K#8q<E_t$p-$ x@{ETw qZ49*H@Fg=IGBDN>8bP-l3)80y$(|0(XVQF:Z' );
define( 'SECURE_AUTH_KEY',  'vLuM|H{fPUO>&y6aU_E<6EafJmt#&2MTxLc#5Rs8p|=gg;SOCOlQ^t%$]Si;RhT}' );
define( 'LOGGED_IN_KEY',    'oSn*@vr#V5qb%St.0+.v5QQFa<w!$;Ne{_.6zqK(P,f<=#<-FCI|LP6vL3Sn7R(@' );
define( 'NONCE_KEY',        'WW5O7Mm3%!.M8I?.yF*,:bSYD_~UK#Q2 vIt]1eQbm*`3f5%jQL%Wo`UspHr!:(?' );
define( 'AUTH_SALT',        '-d7SQCajNxZ)hpyi,:{>NP>P~lyv`eXMl`Y>AU#*$<p)?:/*WhO^:pmAx#xd9H:w' );
define( 'SECURE_AUTH_SALT', 'yfHAc+[JwBM4n_c1)^{SC!M?&4Xn@z1WU|`#Nnk_%>6N%R}<KzX-N)u89@wm;_{3' );
define( 'LOGGED_IN_SALT',   'rmE,YZ{-KgY.hvONySnW!?RI/nay2jT;oR$W&^P l_2<2_AdO&aEI~fb;:_dLGM2' );
define( 'NONCE_SALT',       '*e],UZ$:`(1tw2[gNISKnIVMLa8`v-`g9V(UgaWOwC,;` /C}b2l}8n-qL<=K_i|' );

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
