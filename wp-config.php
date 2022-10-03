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
define( 'DB_NAME', 'cms' );

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
define( 'AUTH_KEY',         'zOJ0/}XIXzY5iK$~J Zs>YD+~>[?$7q(5nmjVVN}?q4&dyAu(x-z|#L^&K)W}Qat' );
define( 'SECURE_AUTH_KEY',  'L{rD)e*GOBT<L.Mt>2uLAB?*.f> lp4@c6m^mkzLIE:i&Mzhm2sn|b=}/v%?tm/y' );
define( 'LOGGED_IN_KEY',    'GMyA22fKZGJaQ0T}Jd1#G3=d`j56I/(?oqU#qaq]<>F7^tn&lpU,{{>no66`]u,p' );
define( 'NONCE_KEY',        '?3&l-!DhsWiV]>?*e vWwc/lmAi_?Bmf=E)p1qIZMdZ+R+f29iU@i|GJ(pZ6F#:p' );
define( 'AUTH_SALT',        '<a2Hmd5^tK-U5(D[/yJ(eI7Kw3TH!q)g/Sm`,0j02!T%`0l0#fkFBo:8cy%gW{@=' );
define( 'SECURE_AUTH_SALT', 'zA sXs;dT+SZT#H-p[j~J}VUWB>QuY[UVWAJ$esZr_l`7.aFs-e5vV56shyD+hC;' );
define( 'LOGGED_IN_SALT',   '<3C4NRsB&{Xjeg7C_KGs-3mDUh#9/m$KG12|3g7.,Vbyqzls`z-xJW9X5?:K~&c@' );
define( 'NONCE_SALT',       'Jcy7g>6MuXk2Q#;^TFjAuX_kS?!F/4+PmN`,ZylPD96V8 0u&&Dg;K;y%-MoK.4y' );

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
