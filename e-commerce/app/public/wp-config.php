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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Bm5Rh^yuQ-_SxtVs2}TKcuDp=%S Hp]7B{e;F @!-x]4@w%-[:W.ZFge6wo/3IF4' );
define( 'SECURE_AUTH_KEY',   'LNp04Y>W:=9I1G~-Q2/&9Nw,r5MfJV5J h?}1B?(3I~c`W6!%WFfE+6Y R@[lO?p' );
define( 'LOGGED_IN_KEY',     '*l87t:(b`|wNJ+^h+=,)1}P4cgXT%/cMsYC|GdS[D-twB-7QT+aNBb*n2LX;@+q$' );
define( 'NONCE_KEY',         '(~Ytr Or=KM&Nk4SY}cVEbzq)aX`aH X}]6dV<QN]zd W::/~b*KG*A9 cZ>@?ng' );
define( 'AUTH_SALT',         'cWTAQds[@347_i>@yZe,nOYHWMz2(PS-bb=pX.pjhVFQ[L/VVyW&2 p`)!^]./~t' );
define( 'SECURE_AUTH_SALT',  'j3  ~xrtTBD_7XnX:4{Wj>+Yr`8##1N9DSg+bH6!&c[fi*)7X8tyy*5$XY^bI%L:' );
define( 'LOGGED_IN_SALT',    '{98!?(rq}w2A@w{+l]zU}6gR,OW#U^_VR6h.{Hb<#b5l^VA? >KRzM-`R>8lC{&?' );
define( 'NONCE_SALT',        'B$LTty45Qt|~<w/$g$o76aV;U^Rcqe_X^;tz#&{])[<tm~E/eOU`Pq.Hnu=lcFv=' );
define( 'WP_CACHE_KEY_SALT', 'j&HeS0Ise}6JN8wlP@@;CR@[=BXB.X9-r*Ka&Qc[GM1T>`:9]A%o)apl,U9+|jqT' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
