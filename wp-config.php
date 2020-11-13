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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'vn/pXLNdyrw1@LtEGL1f|@b|$Db(wAiFbWQvb.|1WXAHyE}:|tpN~V8>cZb}LnA0' );
define( 'SECURE_AUTH_KEY',  '2Z$;Y#3G+FcW(=6>{w*t9=&r-WY;uTBxTzG5<q)N.`uG9zOHE85b[R8-Fj03GQ29' );
define( 'LOGGED_IN_KEY',    ')vm2):@T}=,<wT3U)j?*IH<8_ ?[5w*;<ccS</4aa*c@iAw! KQ_,vY]K7VYc8:v' );
define( 'NONCE_KEY',        '&PsB)`7lLHoP>kACZ[P;2Ot-m*r4),V}B=GX97}rF8Az<$b?ED-31i+&UrgRJ#Sg' );
define( 'AUTH_SALT',        'zN#rT/TTthaB!,N:3A9 KInroqa@} >_4,1cw#NHO`R;15m.*x_U?+[+E)Mn82a2' );
define( 'SECURE_AUTH_SALT', '4kVdd:&`r-> 9<87Cqzw0kO[<L5.<Z42}Q9{G&_r AZY++KvRK&%PjZtYKGR<q_8' );
define( 'LOGGED_IN_SALT',   'yoz@ZSHB9^B{|& 4&Uu.:UrRYRBTGHJ>k~`fyE)Z*x:@f;h@we{pq@J#!]$ljhhf' );
define( 'NONCE_SALT',       'M&v8U}r^QeSCSrn8Ji bC-#f9ncq0h8s^HwK`M;/MpfXl=17L{NoI=;c(FKwCIwQ' );

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
