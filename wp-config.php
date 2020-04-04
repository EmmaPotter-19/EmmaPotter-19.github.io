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
define( 'DB_NAME', 'EmmaPotter-19_db' );

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
define( 'AUTH_KEY',         'rQwNZ]aOkwX?K:7LI$NKkZ~S&q`;Y~Ts:bn5SbnVP-JE8cF7k.i#q<tX_P%^}:_H' );
define( 'SECURE_AUTH_KEY',  '!G@ 3QWS.l[u.v#`qBQMh=V7aC0]&BDO$n;yyWF@W/8#u<_i5A_v5P=|:aw$m Rv' );
define( 'LOGGED_IN_KEY',    '19fJ:Pqb(zfOdY!%m}aF<|yWFfsPt!ELe}BF4Q=GA&t7:;0w[G[w>4->]U6se}wZ' );
define( 'NONCE_KEY',        'uv)aVHY|H-MNOdW =N1^^{#bX+D9R[lbX1sY6eDl!/AMcGpDS|@c^Vyr8|BlEE.1' );
define( 'AUTH_SALT',        'X%:}/=s0&%i0)GE&mms(k=#y%!C4oq<%1fvC Z2NyMTau*3ME$SrzW<:>OP;lT3a' );
define( 'SECURE_AUTH_SALT', 'A F4YT-]:NQ;w`dGU]|a${^} WHMbKyk[SDDB)Qcy~{Qml5{bhC&868A?no(!kba' );
define( 'LOGGED_IN_SALT',   'F+;PO5E86/z^e2q|87vbr/u1hg~*` l-;Dph~soNXlC^JJEme>;,%M<3k,jB3n~r' );
define( 'NONCE_SALT',       'GCX[&2JWw~$Z{vb{51.DgbXshs`H_zj7W;|+iL3W|yB^F|-;?q}n7af-ReU<`9EL' );

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
