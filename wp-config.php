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
ssssss
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'marquee_travels' );

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
define( 'AUTH_KEY',         '!eRa84~M^+ZWfM^r@FI]l%^u+Xm<1,>7:&4Gfz/P{*Z]hbAYXj2&S2a-X9<k-_w-' );
define( 'SECURE_AUTH_KEY',  'hn%:JtgTf-DH#*}*N#.;*L$01u~6:u|oQ^M#ItS}pWGUdg^Doi+pBRKy FY`==Zg' );
define( 'LOGGED_IN_KEY',    ':]=5B;%5g~c,?.-#z3n*^doSl#|ojIr_6Z7`vKhDL{R tqq_P:H<,z@F.p65i_s1' );
define( 'NONCE_KEY',        'iv+KAT}/x!7TQBG*3+tq~FR~xt:.4on{]-me0#3#%(n$Y0p)iy@jBPMT9t+Rx$w#' );
define( 'AUTH_SALT',        'JH1~!ox$z9OL*l3Tes*zf7pM_V<ibt^_Sigy:36AK=5Cxz,k1rHXfHDh(U;DA%vH' );
define( 'SECURE_AUTH_SALT', 'G9qad&1VEnV&ZVQ^L*+[>8HC|~U??Hb6yacK[#GF9UZO_rx|vou$8ocQw,b`p5T{' );
define( 'LOGGED_IN_SALT',   'P>QPO{FJgmlM7%/nW K.H:sn9_=RE0}F*ldX1_6AT$78n,phY#6w)[Oeg(3GfbQ/' );
define( 'NONCE_SALT',       'E+U+X^iVX9fhD w7)[({.j&KB,N&aYty-#8W{T@8(RSIH*5+0xM_lYdv;a|aBTn9' );

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
