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
define( 'DB_NAME', 'wordpresskarangtaruna' );

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
define( 'AUTH_KEY',         ' |]`/HdmNy-TzVW*>SgS8}LU|&D;^J[LX1=AYct,OV9ZS6E}-b2]w]E7WqdKYR}Q' );
define( 'SECURE_AUTH_KEY',  'Bcn3oBDx?u}tDJ6VEw,9|@o1d8B!;3BXgp,k6l3[=1IdnYb^>~.|W1v HT(GE:UV' );
define( 'LOGGED_IN_KEY',    '6ER3&kI!$Lv^?4*`>V0)pVZU:t#ar 6^$hZ^>a|Vt^9Y,<Jc_(:h&1[24&Z0#R}0' );
define( 'NONCE_KEY',        'k;8K>$=a`CH:f@M_0ALDTS*K}fg{JuLjL=]&4r292T 0:7pj+~i x6V&W+B:6@Jl' );
define( 'AUTH_SALT',        'MoD=$,ebNUh2^uiB?%yH-][I|xtFI2UKjmSwsS~/C|~~;iOkF|Q4PT,J0{Z)]H7h' );
define( 'SECURE_AUTH_SALT', 'OS)@K5aFr=8Y]@H$A<7;H8u=AyEusuOT=f4(9+b?u>0`FsCU=d[L)7=v,WL@l:NP' );
define( 'LOGGED_IN_SALT',   'G&ET,,k23((?od./w2KocycMKipQHu8v20*KN0sXaA4QpWUxWKLRkf8yK<^cYcUT' );
define( 'NONCE_SALT',       'g|_&np@o2MLy&}y@s?Jx,S/3 Fez|V/|Zyx&ewUM;Am75K3co*o7-9XLQ!)`z&b`' );

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
