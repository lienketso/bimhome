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
define( 'DB_NAME', 'bimhome' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vXAF6dX0i89Z7PATALpQ4nRvPaPV2LweLoleR5zFHCb6TSgl78t3RhPEuHC2fm6A' );
define( 'SECURE_AUTH_KEY',  'bAu0uCAvgUELSrnRJnQWSzz3Hw0czYYhiJH9M3kE5RNcZQOcOG7PIjqr49VLw6Fc' );
define( 'LOGGED_IN_KEY',    'rpVIICf8wa5NDc0J2H6eOpDso6jWeyKUsKpjyMA5prDTFRYukcirID5DqWbeSpdE' );
define( 'NONCE_KEY',        '1IsUxruDhl2bkW2cmFjQ48ZzASvUXWw4l9W9TZzALgaI6L1RhmkjVdV11D1OpefK' );
define( 'AUTH_SALT',        'y2Y8lgK02vZz2FSGHEwsiOlGMFHRHlicdwtYecy785GyvF4fewmc9MLnAkQoW5hR' );
define( 'SECURE_AUTH_SALT', 'gtcFajdI3XTVzvVhiFwVgTD6O0NIHKpYal3nx6vdtFOf2oudSVEsTb4wpbLUUve7' );
define( 'LOGGED_IN_SALT',   '4psqajcUdnZ6qZEKeTauGAI4l3ei5LwVlCcl3O3GRkvEMpxykTS9oEpJXlyOW8me' );
define( 'NONCE_SALT',       'V1okYBTxu8SqOVRt6WVNo2XJdcd4kcYjmSMkkpXpeIfcmXl8FyoMIR0EZmAikbfB' );

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
