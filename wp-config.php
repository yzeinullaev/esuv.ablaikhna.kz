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
define('DB_NAME', 'esuvo');

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
define('AUTH_KEY',         'oJFG@fh^3jr9N<mKID0+9]>M;kAZhg`{.J%i9#d]~8v`@9x~hk}{%1$yh`3pJcY|');
define('SECURE_AUTH_KEY',  '6)dXvlMq]BihSv>e@Y|g868d_EHAOCQ:pj_k2tbT$K-Ko8D|,V%jTu!b)~RQShoZ');
define('LOGGED_IN_KEY',    'CVF$j_nD&e$-,w9Y>(nFu#vo4+Y^<(!c9yo5-iMr:Qn)BW/}fZjqfIB>T*=Z47Mi');
define('NONCE_KEY',        'r3iAA+VYR5Mw4P!>ficXi]i[dH=?%/bWQhpRtA>ZERpduNcyE5CPhB^?a`}((Z*w');
define('AUTH_SALT',        'SW%0-pP:%rJ}xvJAx?Yk<NBwSd#Ey){tcHbeg;Cu jN9O~1Cr.-|=ul[o$@N6~Th');
define('SECURE_AUTH_SALT', 'RYNc82Xif cAnzoVB*hkHK>_JI8Tr ^?R{b`E0eewkG%Dpm{JaNhDa_-9TZs[*3n');
define('LOGGED_IN_SALT',   '()&P^AW&#kTLWN^K}6if+kp70}oy(-}>76ubj(-#oemxk;@@!Y%B-/bXvpq %mRS');
define('NONCE_SALT',       '%(*IXx*3%}oCn/II=,w;*84H>$gQ@`e#aRfVHb#+lGxPF8QNLXizg1YF}}_!{!ky');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'esvwp_';

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
