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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'teststaticwebsite_db' );

/** MySQL database username */
define( 'DB_USER', 'EmmaGithub' );

/** MySQL database password */
define( 'DB_PASSWORD', 'That\'s-code-19' );

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
define( 'AUTH_KEY',         '[cf&imzVjHi+![1zg9hI7Z]J?{ 6K!gzs#L%d)?}pT7p9./N-a`k@]hC%sn?*inL' );
define( 'SECURE_AUTH_KEY',  '>L.5/C|VfJ[.1R~;M:R)24+`_,#?{|sW2QXE`%m@9.((k0S,ugUQ!jav*ee([(&/' );
define( 'LOGGED_IN_KEY',    '62cKxonWTLG>!mr-nzO|zLX~$YW&/!Z<UYxUwZ_oMqijU3%Dj{pMK[X%T%tY`Q? ' );
define( 'NONCE_KEY',        'aED3aVuPku`OnxQR<.4}cy^;}.P>CbLq}j@=:!z2f{A`)XQCzHb=G)xxz]rCJfm+' );
define( 'AUTH_SALT',        'DJD`/B|9xs9_+1ieTn`?.c,Q^d>KW^>QA@ ArJor4{j;lg;[*N7ocT>_MsHf22{c' );
define( 'SECURE_AUTH_SALT', 'EjNvi<xNdOo}bU$`=BFkW?arKG2(I`@ul]dvdTp(|:<Vw$%a%&>%^K`o~Ph)xS)W' );
define( 'LOGGED_IN_SALT',   's-#H 1)J=GU[>gS!ApcEbzj(0&3F?M|!`qo~sy?(7Z^yesc(`;9&?7(w:Q^24w0%' );
define( 'NONCE_SALT',       'Fn`N4TME{+O`Cc`1tBh9,EyU{Bg9nS.:*/+r=-4=WsQz[#!e:Acu9UJ~&Q:[|Z:x' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp2_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
