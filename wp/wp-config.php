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
define('DB_PASSWORD', 'usbw');

/** MySQL hostname */
define('DB_HOST', 'localhost:8080');

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
define('AUTH_KEY',         '*6} 9/e<!)q?X>pYX,rgF5/fM~BVb|p2wH$~!A7[` P0FfSZDBEj/jShY;GI6$,2');
define('SECURE_AUTH_KEY',  '0qV>(i ;4^ 1,o1 IxWk3^+F.zTyh1npb7bE4sV[v|g<h)q%**/M;y*63# /~D*w');
define('LOGGED_IN_KEY',    '!;4~m9>h[WS#gH.2mz*A%1fD}$vMbt_/iJN>V(_tGAY$i<?7G;<|T4w5:[fsp1VW');
define('NONCE_KEY',        'eL?mv=X.|FmSV+||%L3qaX4}jmA$s8C&`&V}~z~Lgc-Z={|x`Uf[~}8a2@3[X}hh');
define('AUTH_SALT',        'Q8J:!4@])l)Q&e!dn%bUF13&ajJ6D3J(i} >JNl;z>~W5@myu{}W6d:lxgj[hOIU');
define('SECURE_AUTH_SALT', 'nJD&<Z3Mam7W0-Y5%*bm}:JVR/Ye5n;Yx@v0^:xDxY<%0P3)ggckjSHCqR5^}&)#');
define('LOGGED_IN_SALT',   '7$5T]fvi/D`*Bol:;nx@P#wyv[*89s :gnTX?I@gSo;B&UM`~ai8?13E.Uh)D,4c');
define('NONCE_SALT',       'J2iYRD?s&NIC8^2yb}i:MM=d]q)JR_[8wI|IYgd?tO<AEwj:>Dq;+ehDMQ)WD?5N');

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

