<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'enviro2');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bkknjihafsc03x7ugdgrz8pl5g6atb7hxlulf6btq6ibwqndapglsot88vydrra6' );
define( 'SECURE_AUTH_KEY',  'onjgqono3jafcacw3w7t5ecscxifbsj31wt4ph2ba2z6uxvdnsfmzqry4ipzjnjd' );
define( 'LOGGED_IN_KEY',    'ata8mg8fdj0bho5krtomgtbddragyqxmzk4fb0iyhvrvduqfo7hikkr1o9s299ok' );
define( 'NONCE_KEY',        'qhpxx6r5y8a1rxulr9itmwcg1asugdi52fv7eb0sebae16jwjcwsmnt3pisw48tw' );
define( 'AUTH_SALT',        '5kcafjzmrhk31ucgqpneoerwoaoeghgfmyzcbya9yrllxmhrsbxvn3iskd5jtsyv' );
define( 'SECURE_AUTH_SALT', 'gp6hzaw4vx4aapr7j7pzze78r7kokvbep2fcbm8swf8bqtja3tkbwprjaxvbys5q' );
define( 'LOGGED_IN_SALT',   'demom50ix1xqypd3os8ros0yeo1yvdusbcgg27i5nskxpofpaq6bj1r3e85pn3iz' );
define( 'NONCE_SALT',       '0hhlvdhezd4cwq5por0cvnmacu77s4cy00p0kpdyniv2oy8wnsjih9aqd20wmseb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpeb_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
