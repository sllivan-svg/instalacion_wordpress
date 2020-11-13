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
define( 'AUTH_KEY',         'kq6<&f/AonV@lHrvqYedIV,|N>?L@hCk4EeKRiTNo}1KisQ~m$ATu{&E<vfA!</!' );
define( 'SECURE_AUTH_KEY',  'S?mFp&/Nu%<|xW-):poUNQ@Jz1e5:EEc:*=F@3X2bn?;}mFUsSczF.Nglp?nn?uX' );
define( 'LOGGED_IN_KEY',    'M(kzc>7qcc~@LCNt$oeGqOeno*Wvh*%};|^w/ oe90nUy<yF#jMBZ[$-,:+5s4q<' );
define( 'NONCE_KEY',        'ZEd{=+@{e%[,ba[OM1v@xY`S=5<At4yFxIODQXm*G0o9BE:/3@lA+@@@O eTirkv' );
define( 'AUTH_SALT',        '3gb/l k&8;ZZI^]?va24 kt*/}yZ>jbo0K0^a)iC*82i:fY/tA`RBgez_DK{q=9J' );
define( 'SECURE_AUTH_SALT', '$=}Q{7_KhC~24}So{ZJXi8o%ek5.gBK]ENP;SZ<gF{=[Xlydm^E.Xf6V8WMgD#db' );
define( 'LOGGED_IN_SALT',   'Zhe;Sh%>}.!KFW:-yQdx-:/hL[v36~IB<FZna;]_n[p6>f(hFeD`b}t0ad2ts%]c' );
define( 'NONCE_SALT',       '@4}6zezRR:{CV ejzax|9_s)b4Edln#L#R~5/[nD@`qRgwBwj}a]~E6ta.9vmpAa' );

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
