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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'wWA[a}rW~H~7UN#iq+Bsk9?[BUj$6rwXMofB|RPzppS +6aD4<90S2uB,_n|mtzD' );
define( 'SECURE_AUTH_KEY',  '&pvOaZ=hAe?JQ-0{Mw!Z igJMCq)}gDMtOO=h(lnd)5p-< Xns{tF(lk.<erCnS:' );
define( 'LOGGED_IN_KEY',    '1u/64O8<:_3R!6}c]i/F6Yc]SfGYA|lzPa`6<^).3e|3j.>zFRVk3:,Qht9*T {5' );
define( 'NONCE_KEY',        'rO@80:E=WCh.?Anh$<3}P{nEm{|m%s%[=.[<N,hoh3Pj&w^8o?i[15k&w|vqHYRW' );
define( 'AUTH_SALT',        '$YL2PC#YLA*Q$:CI)JO,N2tCd]d!(%uj{g=E/G/>UPXazjanp1:zsM$QcgSO|3L6' );
define( 'SECURE_AUTH_SALT', '{2fI^)&W4<|gi1#P/++@Mz:tgnaTZ;aSfjW|Lrz`.Kui2DCNsfL31{P>A9]>^R,*' );
define( 'LOGGED_IN_SALT',   '83kY&aFDd:EM~)W5}5O[(;M(KTLY29Y_X}p; G=}XU,lNdVKNfZ,/}th8ef5wJmz' );
define( 'NONCE_SALT',       '{rd$KqaqZT/k.*HLM=Z&KN#LI!ExjbxN3:9r9#FLQ%0}~SfS)x2BMb7>TLSJ;-av' );

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
