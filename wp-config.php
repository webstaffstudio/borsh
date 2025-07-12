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
define( 'AUTH_KEY',          'm3U)<[j]qpX OlEX:eAy^a-$4Hw7H{P;eh2OV5WE1nl|v bgK4&WTbnuFkE$+9iY' );
define( 'SECURE_AUTH_KEY',   'fOa/?fx8/ z};?k?>NqbXx-OO`WH?%x9^VdGW@8-kv5hyCP(-z+8<38Tz^v%:l_g' );
define( 'LOGGED_IN_KEY',     'qO):m9*}49;(p3=M*~ 9aK-nFPJS=F]X5JvhG]qpEqr/&`pD@l^0!nsDmEMKi3Y=' );
define( 'NONCE_KEY',         '|=d~^DoM YY$hqe^30=}Vv.=}V4b% n!5BFS`L]~~!u?o`iNQ+tg~y8{yb>>wLTL' );
define( 'AUTH_SALT',         ',g[djiFx+E/3) a*JIUIvzWdB[vVSpCUGEy_}i|%GSniM;q61PPxZh&RTXY-0r5p' );
define( 'SECURE_AUTH_SALT',  '{3o7^/_[<2ojBzt90IwIX!I03.:l-XVU(A`To#A5=.GyjFKfGMJ<H8A5nBId;Z6 ' );
define( 'LOGGED_IN_SALT',    'rI](O^;GTQ85ia }CCl!^ &t#*<,EX}-sP^,5PEY/~|ng1.?g 2t[JzxdX.pB4YB' );
define( 'NONCE_SALT',        '1)YuFmks)Hvw7vaq=$].9)?.IQ=eih!IOT y~ ek<9xxSc2:#gr*V|W;j34qAADz' );
define( 'WP_CACHE_KEY_SALT', '8w)tuuz[Ic^F`AE)NL9<9EL]hJp!CjzYWZ2,st=+oKG$=_f(|+zB*!`-`$J|3Q&d' );


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
	define( 'WP_DEBUG', true );
	define( 'WP_DEBUG_LOG', true );
	define( 'WP_DEBUG_DISPLAY', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
