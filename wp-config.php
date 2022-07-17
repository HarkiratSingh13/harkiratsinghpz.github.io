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
define( 'DB_NAME', 'personal' );

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
define( 'AUTH_KEY',         '~bTW% jqD(LC4O&;A>XCt5k{nv4fXOAEW,(+Y>lJyT9iR-s}2CZ~6a@C<@M7QXgn' );
define( 'SECURE_AUTH_KEY',  '^ vjaBYiT?XPhkk/koRrr*#EU0KQiTju%z ?{{Crrqmwn4D ?uEdI>!.:Q!uWxzk' );
define( 'LOGGED_IN_KEY',    '9YeTbymWh2Zy];1nDnThX8^wb]~!)]QQp0I_^jyIEzIth-}Z$o^NIL|PbkkanayV' );
define( 'NONCE_KEY',        'CoK(v.T:RVz*& Q()b.*%qK=+$XPjrwp 54%ZQ2)_S5O1$K[9hg;Ci,~aEqCFf~X' );
define( 'AUTH_SALT',        'DXNFnRKl3,P^(11eP>u=+s^N&F)K^}zG10&[7zZyo3z-*[ql7Rjk!sh.tV:(-)R<' );
define( 'SECURE_AUTH_SALT', 'k8JV-JhJ8%g/}:j=&H8_Z1&xov;SPb@bLA.5JY|P(y$-_a/,YRTv[d@f`B|yrh@x' );
define( 'LOGGED_IN_SALT',   '~x1>(Pc4E$4haP^X{AhKNcsHia~%D<RiuET!Ut>&?D#_<uE68I,`+n|2p-Zj?hJ4' );
define( 'NONCE_SALT',       '!<19RzlGVM^9+Z~mdF&y/L|;?Z7KG~>LcjvD0Ak o3-)(]2?*{iz2LIQHul$7T|*' );

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
