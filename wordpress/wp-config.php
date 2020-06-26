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
define( 'DB_NAME', 'db1' );

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
define( 'AUTH_KEY',         'FvN_Rw,BB*c4Bg7[n^Sut5!k|)/h-|*l{?aRrx$>5.^(t;pfpN rarT033*m<HB.' );
define( 'SECURE_AUTH_KEY',  'Y,So4LV@8Jg(D|->e_[)Mzt!E2q|EK.I}9[~c5]D``P!8{|4rob!L2.m+0cZC/yp' );
define( 'LOGGED_IN_KEY',    'nOIDC$[cw;2<:mGy-GjS}h;-g3<7`_R3l`et8`O]_@}_i0Dt;tqk6Ai%`[jmSj::' );
define( 'NONCE_KEY',        'j<-&7d&?i|wS83H{[McCh@i*}jD`GzNN?zIm4lF@1tAV`>j-x3>zGs7z 8Nd^m[J' );
define( 'AUTH_SALT',        'Sn?tApn?5ha>8qd;@t8$KQl1+*,X@sHA)_`<H)zH?m9E;yGBz3on<znxi@{[+G4v' );
define( 'SECURE_AUTH_SALT', '%Bzo|6gqSdvLvE>ik]ponq JIZ%(fjl[%,E||<&$=VJ|!DiggQiWdCzgB&wQ&^~x' );
define( 'LOGGED_IN_SALT',   '%/-$t[i=]c(WF8{u!ruMZj-&@i2bfoP?|[.n],-U[ugiiP~fs6l)9WX|d_9Ia>a(' );
define( 'NONCE_SALT',       '+^*;YaVlv0jeW(7Kx101Il(2&<G:I$zgd~=}U18xs5V/h(lL-BTYpKyJSQL=lem%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'en_';

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
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
