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
define('AUTH_KEY',         '?TRS2_[8v8{W?rTbN3/A1ihsu^q^mUiagA0hD~9?U2~Z?xRfs1Y19|AQ,sU{sAd>');
define('SECURE_AUTH_KEY',  'jb{NYgtd:&x_Mmzd#3pP76d7o7hE{Hd*IL5e~s6J5w62;@[aE~r&?7>x#UfGhgVp');
define('LOGGED_IN_KEY',    'ir<,^%vn0q&ap:bwu*|>w`#!Sw+ )oj$O-~ (?4=hsgEPQjuZJZMv+_.kzWwZmaB');
define('NONCE_KEY',        'YFaXfc|-Kn<@6D^#`^kDCxgp:*dj$0?IOSMw,^J1%4nnw`wst7v.t.)/g;XGu53X');
define('AUTH_SALT',        '@|L+QK#kgUoLq%tD,QH1EBD!3-^x>{:g$gbF71n0JWzl2A6Bwiy(1~y@x4x9rQfZ');
define('SECURE_AUTH_SALT', ')Q)v_&pFm,7is6eWH 7^QyA$3tG?(T$`I2Tt5]@%mpYu+zhy0&1N:f66/!M?6_9K');
define('LOGGED_IN_SALT',   '^<1Hs6*BR70-2GO#Z|RVLk*Bq`mHaSpakwd[m)C6Oohk5]I0rGL;oAaICkyc<7&b');
define('NONCE_SALT',       'R5k&%A%`JMT>h<I]tJSy?ViD/<t(A`?675|3?t6Iz(~+rm5Xv,xm2dMlDsphSO~B');

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
