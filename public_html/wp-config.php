<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assistente_virtual');

/** MySQL database username */
define( 'DB_USER', 'assistente_virtual');

/** MySQL database password */
define( 'DB_PASSWORD', 'LPaJgcz03HXsY7*E');

/** MySQL hostname */
define( 'DB_HOST', 'mariadb_10_5_5:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '983f8da02f5a7a0cfe991cc4070649106d47081f');
define( 'SECURE_AUTH_KEY',  'deca10c54b1b985e25dd4ca7d96309149f775626');
define( 'LOGGED_IN_KEY',    '30b9da7ea44d1622bcd46cf28e2157475c016c23');
define( 'NONCE_KEY',        'd23d40313369119fd0e30df8414e41f84e0fbafa');
define( 'AUTH_SALT',        'd6c0acce1c971b9318f438ee677ca488e811c27a');
define( 'SECURE_AUTH_SALT', 'b781d26be7553fd8294ec795aa75cc69525a2e14');
define( 'LOGGED_IN_SALT',   'e0ed23588e36295f991c3abb88ae177fdfdb5953');
define( 'NONCE_SALT',       'd8beb98b10214bff6514f47d46632cc1eb23a665');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

 /* FS_MEthod */
 define('FS_METHOD', 'direct');

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
