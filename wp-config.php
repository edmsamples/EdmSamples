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
define( 'DB_NAME', 'edmsamples_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'Ol,$~T%W|3rg=3CLmpZC*3?)z*Rz +E%S/BQ95e5;F9$C.SlUKBUv9/V/mB@a?_x' );
define( 'SECURE_AUTH_KEY',  '2qm0jMS@.%pDmVf AE8<^^Pmm3w[[d}[}Xm{YP$KgyT%(~[k?,+73}6><JhO5&`8' );
define( 'LOGGED_IN_KEY',    '*b?;^W/SQb/}e6BXekd_=8ff!Zh%]/66.-Fm^s#DDvT?6}<Wmi0eK^~Y24kgI$}#' );
define( 'NONCE_KEY',        '<1B6oOY_7[sCKBTN{Lv7KDH|=Jz0vW5Foo;vM35nKgYTBywkvBV@Omx.ALYlGu`+' );
define( 'AUTH_SALT',        'qK5Rp^?atr*C+P6[;z c-lD``|7f*W)9lVN/v{5X:/bDR/(8,Jb6>FOuD*x?bD`o' );
define( 'SECURE_AUTH_SALT', 'k0c0wqXAC|U7pxrPxbsHnjd,67cj-Qt}G)|KZsowsPl,4zp^uUXYUmG_>7c+xB1i' );
define( 'LOGGED_IN_SALT',   'YaLX=5TtL)ItD(3K4yru/xro9XJee@:D%Y5&(~yrr01k|hym+-=7<YB<*G aG)V1' );
define( 'NONCE_SALT',       'b)M9dP;Dm}}n]S>-@R(Z2KcXid>5c9M2c}*P?sDY~!DR0-x,I<UR<RpFv&YeZ`E7' );

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
