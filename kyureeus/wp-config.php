<?php

/** WP 2FA plugin data encryption key. For more information please visit melapress.com */
define( 'WP2FA_ENCRYPT_KEY', 'Z0KR1hXNX/m8lZZ+3+Uznw==' );

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kyureeus' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'q(&/${b7t^aYsHKOl{@A;:puPqegM0,k7RlqN*mNZ={R<!DO[7b:T7s=:t2B_3AA' );
define( 'SECURE_AUTH_KEY',  'M@<&P^i{_u8akxxm~(OMWdypagkN:|nL3Y7z{o4MnuCZ;j[m%,O{ 4`MvP}.v{VM' );
define( 'LOGGED_IN_KEY',    '(Y`zv}tP_EYv6F&Y|%9DA>:~.+F:sA*~ZEwTF]|qo6m].ikvO/v#w2+(|1f]IPIj' );
define( 'NONCE_KEY',        'lUufzv:-Y=<3kA-G3&hhykeiWDHY3y313=awb}0Q/z+<Lh,X;)~^`_.e}(q9+kYn' );
define( 'AUTH_SALT',        '21$Fzr7yqPMd.1yzz#V=>fQMKCR%Yb?WxV%Pg>Y%iIsfycPjQ+5=LW2MXRD_IWnd' );
define( 'SECURE_AUTH_SALT', 'VEbLdK3GHD9/o,c4ksfJwK<YXqkuD[)s^zc/p[),(*:*4MkO6-ZT>^nFP5@=/w+#' );
define( 'LOGGED_IN_SALT',   'M@c:1wuY@*kVz|6pZp)~Rvt2uV`d,]X|eJ7*K<4^fQ>s_A|{2=ot04Xl)H){.>&P' );
define( 'NONCE_SALT',       ') My 5umSDtJ#Dd@0dVz^Ma/4&A87ks.:M|u7s%VSEbS+i4|Ts9Q*-A1STZHh^9%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kyrs_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
