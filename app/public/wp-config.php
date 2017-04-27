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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LJCS4H2kLub1pdEUuZESEEcGhTGgnaFuyQOSVyoopf7BxEq93Uamypv6sx0pUEKfjWLDc6aZ3ZZDGNkiMlay5A==');
define('SECURE_AUTH_KEY',  'Iybz38Sn7wU9S9gAeLjt07PuBCDyYw5yUV6gYsYn2pjb88f7+1e/4S64yfR/I71+o4DgrFshYuW9l6tufWsbsA==');
define('LOGGED_IN_KEY',    'oLWE1bpJF/aiKIb5s90fszXANK2mQm/iezdb5Wc3jAQPByA+zWlq+GMn7ZrYeV38LTbk6fpHIVTCXZxNmekpxg==');
define('NONCE_KEY',        '4jOKeioCuBQN4bK8xS5pCO8UYzyyanAzePfHbqxC6lHR2fkW5q/Ok7BNkP9uOcPgUuQGVURGDQmKcPZO/wM9Sg==');
define('AUTH_SALT',        '9GhFq/uX4SKer0WNzGkFavWMuPCWc3xldR/7AxEH1ZYAL+QxJKkjHI1GZmk62BZ1386vcSdJvmt8ZnGzXwSNrA==');
define('SECURE_AUTH_SALT', 'ak4YUUmeXDNotFfNJ1GuVRVkxWjFcW3DeHDyLequg4hFjExdtYIppcaPuhx7NAHvcOkKNz9lcQ3hHk1q4E+OfA==');
define('LOGGED_IN_SALT',   '5c2nMFGIG1pTxVr8cuybwrzehNVEeiABCbLKGi2aMB3ARzS1O3Sp3yYyRLWAQ8O2A+4yj4RGWN4PuODJ9/Nv6w==');
define('NONCE_SALT',       '7rhWB2IimWgAlsySJbraJ9eX7BljW1PyCMxguWxqwSzw/g0quudeY8MiGZBNCdrrzY4QDhatgakhvb9xAFIlZw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
