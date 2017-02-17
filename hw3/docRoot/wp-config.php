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
define('DB_USER', 'wpadmin');

/** MySQL database password */
define('DB_PASSWORD', 'wppass');

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
define('AUTH_KEY',         'R@3mK/Nq0QG8_:Bi1^5$o;0^/3mOPO6[=XLdM@ ekcLmePcss]9^(|^cX84b_d@3');
define('SECURE_AUTH_KEY',  '+}9qpz{)/apaA15EStC-Ch_CiD,i)+u.vrS#F/UC6o$Xk1BC3$DJ_,em0Tp+@>&8');
define('LOGGED_IN_KEY',    'i8ngv.{}BI!v936Yt!Ro8$[ 8CuFWEh/IcnphW6}=fReg1vp3Iw@Zimp3_Z2<j(w');
define('NONCE_KEY',        'n9jUr!9Mt{aiO+%t|vyQS AA#GpcCxX)J2L2VN7m+k5#/fj6WWw2&jJA@[=3&y8h');
define('AUTH_SALT',        '9N|#Kn5hy?l6:*>q3ImdC;gn&7w6/@J3J`h>4TfYJ[{R6^LURTcVsp>[mu?,kSq[');
define('SECURE_AUTH_SALT', 'nzxeA-v{U=gRZ?*m=]Km&t!jlxe-6U35MD+cm8vd9EH3tWfN-qxf_yC$gl&UWM4`');
define('LOGGED_IN_SALT',   'ot.dGy,bj6sl~}VO!5yd.r`91MMt4b~j8Mnx^KP@]>p/HBaP cYdG^8Qlng{lJ:S');
define('NONCE_SALT',       'QrcGU<t,n%hGae00^UhTVoreZd$!XX*I;dw&Y.|#W&^7p(gMUwwqu@A1rG=KQ7O8');

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
