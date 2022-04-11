<?php
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
define( 'DB_NAME', 'mytest_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'U5x@[k}T!Ola!(3ALDpX25l,9Xj!A&r~D%$WyxmQKxI~YGnfe=4X*xzb?m;L:!!:' );
define( 'SECURE_AUTH_KEY',  'Y+Q1(te`?sC=x}#oLle5kc@(#SJGp)5o`C?n-?/PZV.Q%]CK^YaGNKl~_H~p[GE3' );
define( 'LOGGED_IN_KEY',    'QUq3(R7X.)nnWhj-p8L?^zkw{ka:8q:/=`kWh-9;Splj=R^iX##U+Gf }Iv,<AV+' );
define( 'NONCE_KEY',        '|`!)F2eu&]M=(5{#jK!;?s}+8gm<w(38NZKH.3XA.#jLXepc CI/A&`v{Aw]5+!O' );
define( 'AUTH_SALT',        '=qBeySB^9_kcfnFOTu-VPsN#HxD}NEh_wv9*4OU]UH/`v?Ix!;M(e5XX%sLQU-7R' );
define( 'SECURE_AUTH_SALT', '#a4Dh84g_$C3W0K$u-$nP6cy}CK4M9d9cpNN>EdP8Kw?%bi/5pFJdlYiG}ofa6;n' );
define( 'LOGGED_IN_SALT',   'b%pvM;eAWU2TlBZ}m.)kD?eUpU3 -7LRd8F>`6U1gc8p=.;+9gav^IBxr5RxjxIJ' );
define( 'NONCE_SALT',       ';JHoKTQzX-]G}Y{:3/F%{UGw`Ww[~s|LfNqLSI ID9npl(rUs@!<Kw[^d3pbR{S^' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
