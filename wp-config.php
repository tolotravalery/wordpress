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
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         ' IVmt~Q~Q}zq~A^g}W7kF8o2!<g9>vo0SG$O^X<7eQqL;MTE&<p?0Ki*^</>E)1>' );
define( 'SECURE_AUTH_KEY',  'az0`zYIjLRQn{h}b#~FY3KujN 75dxx8f<&-GQ#z2>psEcqq~* |O&;teruEP@O{' );
define( 'LOGGED_IN_KEY',    '6Dz3KM0%&<~O.g:]7e&i=EXsN/q[<`uM^DvX#^F{6lc!lS.nu_]vsW&[xI?*19i-' );
define( 'NONCE_KEY',        'TrrpKlI:)z(}Ouh_i4M`ffsBg?Wp*CD}cQB,K`5l:0rbiJpQ~G([C.%Hy_Z9vpM/' );
define( 'AUTH_SALT',        '#1Ua+qL?#9h Z{raW=2 K!Ku9NC6PRgs@wC3lD)M=f6r/mdva#0!/@*;G96#Uyng' );
define( 'SECURE_AUTH_SALT', 'Z+?6Fjt3BZL$!x8XKr}nZ4Jxa#y*]EtbVgz13aVV8bQsD-vkq s9yH,7G}_wW@<Q' );
define( 'LOGGED_IN_SALT',   '(!%d[F&NRv6JR.C/5NBdoDN>[D8(<bH~!z]6!L].<<DI*PaaOU.BSPi{nEuT/J#|' );
define( 'NONCE_SALT',       '[M853G_i8O#[=ewd0WCO9lXhcEr`,uff7~8<@e8uZry|Mpfqb%r_`:iL.48$#dTC' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
