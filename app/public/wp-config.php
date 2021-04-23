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
define('AUTH_KEY',         'fU9UJKTsOtS3mzyPu1hRmJ1rTzhsbQXHSH54fecLIeWBxlVQ6TkKZfs06qorJofmXncPK9jSoMw2aso6k6lW/A==');
define('SECURE_AUTH_KEY',  'Dl1qNzUxPZdtGOFDuWr2U6REhJY1d5w9bHpWZvqDPeXrYZwQ1slNUMlLszwJOjTqZXjvvj65T+XMMK3XaItRRA==');
define('LOGGED_IN_KEY',    'p98kYI6eVoRWhXeLACGJAQrE27yhJS8u+Z7M03c6RdqwKwsgoS7/gu8BfAL6GdGZ6Se3Xn9IZ8cxinCdvwJ0jg==');
define('NONCE_KEY',        '4D07m/0jrVMUiMZ5lYPVCMbvE3I10JjFATvXX9o9Djx3LUrGTL5xqUpJfpYPtjhe1bx2KRDzBW45KCePFM/mAA==');
define('AUTH_SALT',        'c3hO4BcQrqcCKjbklCQZvLN0qrd8bi/XYyRdC1cdhDucSJ+74DnXrmi6DHvAI29nusttZ7bXrQqGRMufDUUXHg==');
define('SECURE_AUTH_SALT', 'aizvWRSVNIgUKq/bvCsN1LgcjQ3Lyd7G9DqJesU7Xc2RMSsdSREn79do2aGLv0KRLxiluRrLEZu6urGhVRa3mg==');
define('LOGGED_IN_SALT',   'A+QfMU9ZExC5mntoFlClER4mfC+rEguP7xgIMDG3AeYpNF0fn1Qy17nb82PcRD6szsVe06BZWMzngyJPL2fT3w==');
define('NONCE_SALT',       'mG8pIAq/RLJIk3ALujKnsfjAMuXiiEXIX798LKxhoccavQkPtqW5kymJNQEr9Wdxpv7fXpNSTG3PV4VVRDEwyA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
