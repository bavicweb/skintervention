<?php
define('WP_AUTO_UPDATE_CORE', 'minor');
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
define( 'DB_NAME', 'skintervention' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'aecequiqtanlnhca65gx4urcxalrqgzaxahxrp4kvsumnkasuygqcwef1j2snu3w' );
define( 'SECURE_AUTH_KEY',  'rkealtqmbtnljv4puyitri68ngmng0a1yja48wcghlr6skzgbynrioholumf3jw2' );
define( 'LOGGED_IN_KEY',    '8l9g6rknytauqavzvkw2yvrhsllspiuhhc4m5lgfp0rlfe7vangebcetesj9tma7' );
define( 'NONCE_KEY',        'cngi7cruo7xyixclqmufxll98xcceyihvqsowhjw8ywsk5y4bz0xx8h0rax5norx' );
define( 'AUTH_SALT',        'ehmihiqrsacikicfw56ljxqy0zmoy5zp3qt3fskccq2xknjnq7rsjkommxpwzfba' );
define( 'SECURE_AUTH_SALT', 'yacp0qgrjicqglvlzof2jmuy2en5jjizrhloymah1mft8isco1jicn1fpas6xt6d' );
define( 'LOGGED_IN_SALT',   'vbguhly9xem8zdykv7d6mithb9silxiavltoi7h5scfnoneqoxabi3kuxqbdzgfp' );
define( 'NONCE_SALT',       's6t7wromqktvrtsxnhxv6nhvhuj9cjvdrxtnalgenvesqfl07xikqdwklb077xzu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpth_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
