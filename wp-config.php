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
define( 'DB_NAME', 'EmmaPotter-19_DB' );

/** MySQL database username */
define( 'DB_USER', 'GithubEmma' );

/** MySQL database password */
define( 'DB_PASSWORD', 'GithubEmma' );

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
define( 'AUTH_KEY',         'u&kfEFq4,(!4-/!y%{3I>*p@o{T6Fo/rlpgt3d|uv@p.7i<t($QGN]NB}0:P}[yT' );
define( 'SECURE_AUTH_KEY',  ' Ajh*[SIoEcz$hT[%>MI1WLC`e?;}$<LzFv{c;D/f]Zr5t^t?csZ0qV>J8v/[Ac@' );
define( 'LOGGED_IN_KEY',    'I:[@3hl=9ZL@n0,n6BZtSiGi/is8mh3@Mm; Og`~3.oYPq>gS%Dt]ql,Du}E3li!' );
define( 'NONCE_KEY',        'u=?[Vliu#b(.&b[jM#5:OVfU|cr&|}W?/rloZG^Z3[0-4?zIv<5ACyhh+%?5Ch.=' );
define( 'AUTH_SALT',        ' @bRM28UZ6cC*E6nm<#bT#,SAYPR]M3$0D#-SVYHed1Cc:9B6%B9,bj<pa*7OkXK' );
define( 'SECURE_AUTH_SALT', 'Y&MFAP2D5F+,CPKxL|Qt<-Y!-onKiM_B684_do^ZMi`CBp!%olv-a:Ix=E+JALN%' );
define( 'LOGGED_IN_SALT',   ')(s!rxmZ!l4vO-yMQ=KU&4Hns]Pj{m[|IYOGbYLt~^LuX1?(GXt{+-*hsR%>jY2c' );
define( 'NONCE_SALT',       'rJMDZvAM|R_`FbsfNI@&`;=He(ZC[G,]qS9><Ew7M+@[_5aj0)@Q0 I1sLn[`CUX' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
