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
define('DB_NAME', 'Bootstrap2Wordpress');

/** MySQL database username */
define('DB_USER', 'BootMan');

/** MySQL database password */
define('DB_PASSWORD', '2CFdVC3wu8HaGXn2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '6pmC3#sy{&>@}@Wwv=:.b2|[}]-UsIE^?;NPV~]ySBJm_oxtC|T,uA_O|d|+fjkg');
define('SECURE_AUTH_KEY',  ':r+C+/B.l1/@*RsD.,j^-*)-)+s~ae^sh}8>Xa,l>I1z;{jVf3+_:F2m/O]JW1_g');
define('LOGGED_IN_KEY',    'S{cM*6{i*qMQ)0 $4c]gX-[kP: +:ZI=[5b=P-BWVl%liqOHx-Y ;TDOFU>|VszV');
define('NONCE_KEY',        '?R?9q!cjaEe)-;_Is%ti0,i22<^ sr$4_.t|VJj;VMO*6=|egz)459H3IX$+J%-k');
define('AUTH_SALT',        '1W.M@0I,Z~$}}$pB~VAFZ(5cWV:|aV;T_19,|Dy&-i|Ei4Ums}eIrl?!+6 [6,&@');
define('SECURE_AUTH_SALT', 'm4mQ0PT$$!<GNn|`D1IhIZ5nKsV3)T>Fp/#pCKRn_JP5?!8Y->8tO&|C|a^Yv=1C');
define('LOGGED_IN_SALT',   'M0gT*% oHDrJ]+y2&v@?g# $bM/%jKyf|?kl/oOEvB35s(!JmQ%nDqOm|Jm+K&y-');
define('NONCE_SALT',       'ZHv x!0v3Gs/pg|mIo0|A=|*u$T4_[GF:mg yYCn.|we6swm[~%7$<,<j@%uUF+u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs';

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
