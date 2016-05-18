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
define('DB_NAME', 'finalpro_almame');

/** MySQL database username */
define('DB_USER', 'finalpro_almame');

/** MySQL database password */
define('DB_PASSWORD', '7)P8S(Xj97');

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
define('AUTH_KEY',         'pyehm999rx1gobnu9ut8rdatdd7ttmg0cp6okawdvrrkzuriuj2fg5koq4n2i9pu');
define('SECURE_AUTH_KEY',  's98ssptn3tfzizfpydegrsrmu2ppmqp1m0hv9xfcmhvwg605lj1flkz9yennhcj0');
define('LOGGED_IN_KEY',    'qb2uqrkcyeegnyo6tgrxemjogz4pgomphgtqcotyivufelfqm0aas8gyhznkk9cd');
define('NONCE_KEY',        'zurrxnnnhkxjgkclgfisk1oyhz1isudpyzae9uihgfffnblscu1wghbv7b7htck8');
define('AUTH_SALT',        'ly3zejbdgztwfevfxngotlzbthhhzmjeiwbqhscannz9n09sxdxak0dhi5hpzfb0');
define('SECURE_AUTH_SALT', 'xqo7vpbmcdi6rozcn8jousitanb38ixn2cjgdvs93hghikuiljzhdzsani0ctygs');
define('LOGGED_IN_SALT',   'yhxsku4b0nb1swzfd3esipkydf2uznvjj4r12j0gowri9mjznsodnniytfrf3k9t');
define('NONCE_SALT',       '2atrscum9jurgdzymojzlhr6e3ggc8qtaiistswz6ogex4ffumpzpryyxgly6dhj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'alma_';

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
