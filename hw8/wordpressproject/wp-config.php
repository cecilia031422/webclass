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
define('DB_NAME', 'i3474556_wp2');

/** MySQL database username */
define('DB_USER', 'i3474556_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'N*YUY5[gJKximITB#l.76&*5');

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
define('AUTH_KEY',         'dtzHmoBDVa5gKldxQJSzpXn96KLvtN4YFHCbKoG1YA7x0dRJwc3vBBH6iV2InCbo');
define('SECURE_AUTH_KEY',  'o9DApZd6QPkcYqbGxgSGWjJRkjN21VbdVJMn1CBzfNJtYvIm5mXmZg92Mj0FI3Bm');
define('LOGGED_IN_KEY',    'SRFq1SJm5wtG0yIrL02Cwh67lHVdGvdmUvAlQVkcC0usysIfXet80yXkKIJxqsMF');
define('NONCE_KEY',        'E6vwnY4eqxg7yESyZrTjZ0qMCAmbFMNLGwIEoiZ0NoASUCK1TSiWchTNMC3ym7C1');
define('AUTH_SALT',        'pN0tEmPsblPnEj2kSIiMuRCA5XYsObUYlatF1XL2NaoVY0C3ZXEhIQx4outzOiEF');
define('SECURE_AUTH_SALT', '5GRkKW3gzxh0nbC7y4eHjfmIUZzkVVaursKDh1Soj4KIAaCKiZAEcZ4MBVdQSroh');
define('LOGGED_IN_SALT',   'yCLvFK28LYddLFz3RwUNMeMbsj1SfCXstd150F9ymU2w2DpCKyV3C9dqHrQQEhel');
define('NONCE_SALT',       'D6xknyOp8iI2N1Fmo0jofXfeipvaEfutiXmAwyZnOH7f83U8uPvUoju3vPbLOLKX');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
