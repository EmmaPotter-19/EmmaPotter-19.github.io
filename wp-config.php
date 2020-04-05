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
define( 'AUTH_KEY',         'C)-bZ=hqZrWEEWAztMl<kqdD55^Ak437!n&v(rM+v:@8eT(D0},`+R}nV|Ah?=CX' );
define( 'SECURE_AUTH_KEY',  'H--g4jlmz}{UWS26H@*5Lfom61ER<Z(Eb5|x8{;GB/T}XEi6bjBEj7%0?S_<uvRW' );
define( 'LOGGED_IN_KEY',    'HY7~>,Svo!I~4@F,VFj@r#QZs2SctJ/2<nX,8XjD>fxshs*KtD34#dG9xq~d!f3F' );
define( 'NONCE_KEY',        '=L=v7-7SmHJbe@%,U,~-2]UY/s9}3k%q6YQXxfMPyYm@xv/Lc?&d$!;a5[%.kXjV' );
define( 'AUTH_SALT',        'BCwQyNIa[Wuy%3T$</lOsQm}`@# q Hykv(d+`Wg><L?7@Uf.P}g@w)V@@1E)OY,' );
define( 'SECURE_AUTH_SALT', 'x{/U){}k?Vf%$ius{T|F(%x8J?WyH#ic2ZI3/(B1X[v]BAC#,6CVIEOKw6kKJRl!' );
define( 'LOGGED_IN_SALT',   '&REH7IHXNZH{f]c3nv5jTI|aF,*L&Xxr|Gw5pTU!&sE1SoXbQx|iZ]_ygUxp>S>7' );
define( 'NONCE_SALT',       'CLqYz!-5tD?Sg|D!z+p}6|0X7/Ig7w150W@?We6G5G(Y$%z{WB rEL|{xq8RTl9*' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
