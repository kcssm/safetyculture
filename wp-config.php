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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'safety');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X03J//1uel1/0jwKZ3|t!ZKgW-ab_,&ndQ;cK|IV5xft{Cq:Ij:)-SV0u+YZyJ:I');
define('SECURE_AUTH_KEY',  'uw/%saG,;zb@Z~IP=pD3yBKK?`(~!+p$o$2rk#|Cy+R$ft9}NK)(bJg+QkS:e5>?');
define('LOGGED_IN_KEY',    'HP3(94t:N-yvOPebI/XoXzeQ-;`X%asUWftVwYoFiG#eRty(;8s$KBSA?th=hPY#');
define('NONCE_KEY',        '[xD=@i*^brkj8T]k^`{m{W1x17%4@=QSL5?PVv_fM!%h+e&`/*E#6.j*)/4y.6vY');
define('AUTH_SALT',        'NLSi:r<#+79DzgWgP}DMS8^aQSSk9z(:k ~K<F^(P3`=BM6c/q-YT!JNFrCM9{Kg');
define('SECURE_AUTH_SALT', '7RY8={@ VeX; S{,fv+/Ns*pX[sAa0=/zxMPGj[M!<v1$%g{UT?A<{Kz9ht4hruX');
define('LOGGED_IN_SALT',   '0,UW)xP6j1UUaH1zhQcJg}B[A]?H(4{[*p|ve/adF)zK:7?wX#n_s&UT]kUOnoYb');
define('NONCE_SALT',       'CzVq?cW8!r@tAadEK[Mnb?;ca;hY(M=eWH.0wp*zs~bG^%1TIkmc5D6z~oInW ;b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
