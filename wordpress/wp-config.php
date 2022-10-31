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
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

//define('WP_HOME','http://autocuidadoshop.com.br');
//define('WP_SITEURL','http://autocuidadoshop.com.br');

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
define( 'AUTH_KEY',         'lZxx(/^OL} %)rLlW#rTUgL++uU<<,Yti9DF*OhGF&atd@Rw*%a{OHMU<Im${</(' );
define( 'SECURE_AUTH_KEY',  'OSdqDogi~G2P>X}LY>q/``VS@Q$}5Vo1,`KVVXFG&mBUUI1GUTIZ|Ol<yTjDRkQ2' );
define( 'LOGGED_IN_KEY',    'XQ|`OU1ZR,YhYhnS`bw<r =A:SkpE@eP7BVjX[[vi-yhg<vO/ )xANZR_>Q3$/FS' );
define( 'NONCE_KEY',        'R5~_dBa@Nkk9?Qom/d.7!k~}Sky*F^Bb&S5;d[*+4%$[mB?bru16 gMK#b}8:9kJ' );
define( 'AUTH_SALT',        'U&LOt|IXu^%gr#YlU[{=Rc{nx>E;9FWsP_+|c}/^~ez}nmY3U1P~(HF]o[$H-]VY' );
define( 'SECURE_AUTH_SALT', '8Dk[#<@4; 0bV/8K1[0L ;aGD|d!v1HqJ%,/DIhUGlR$^{^tbN [g2D,V,)[Giga' );
define( 'LOGGED_IN_SALT',   'mNo!RmenFO5e$2ibL52bU:Rif6q^j^Pv4YRGTm;&,E2R0U]=q(?#^/8)JqG,p#_H' );
define( 'NONCE_SALT',       'G5%]2YUXvbT(!@q5iRx8ZR?w=#Fo}B$Zozad=GD;PJRVoG#qF,<Jtx`A(FoM5Sa_' );

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
