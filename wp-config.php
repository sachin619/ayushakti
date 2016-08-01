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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'u2d-Dk_JNQj+W6nLzEO%4|1 +GXcy*riDmMXLK6N}/zU->bVBpQW0@)D}*l@80o-');
define('SECURE_AUTH_KEY',  'N*V<Uw7gc.K$ZP;O58)L_O>O^]/v,t$CMr%>RiJ#zLqF!*7Tx5[?xHG];uQl^io7');
define('LOGGED_IN_KEY',    'ys#Kx4}^yg0AkR_Y-i.YcB,/1R]<=@Nb7{FT6I3Dikhlhm7,7Eqa1(4Atzj3P}=[');
define('NONCE_KEY',        'BQ,cE1-t5 >gpzzdQ=2rA8;>RQ5:u:IIA364Ovq>c>-k`KqLNd}6`?`:/zd;|1V(');
define('AUTH_SALT',        '>h99<lOdIM OJVQ9WU(.uXHC3aNS2[^hr/c[4E<tQnqQYW/_}F,jhp^I.huLVU52');
define('SECURE_AUTH_SALT', 'nmC `q*ofK]P%wUAxr&UF@Tn;>9mMLfG}%>X0HA92XmkGd#h!7P<BWmqBgt!NsJO');
define('LOGGED_IN_SALT',   '!=d+z!g0c(NaT.F91htN8 /L{H&m5xpM(T(3Iz^S%Pj0[L!VNX,[z s)FUIYG9{I');
define('NONCE_SALT',       'Pum.d7,K?Vn{zL1f|)]1B3vpzVEh,wc~RYj*upu&a!Ee{,!U^#{QRyrg}*//dCMF');

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
ini_set('log_errors','On');
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
