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
define( 'DB_NAME', 'electro' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'c:?+}(P4}v7*3Ntoy*9!_?l6hj3tMDh918areS()l85e)yjGq7b42/*H3q$Z&b^X' );
define( 'SECURE_AUTH_KEY',  'h3b;T+0<Us&ak5Y8 slonIUHP_.(JR0Df{N@#Ty)/=`o^w<O>Hy_9zYlx;?$<M]$' );
define( 'LOGGED_IN_KEY',    'P$/+!-];H^5)52e/-:lmqOv6eF*j::-Mkque(X]/=JHVwQ2dSE1hx0|Zk!{5pgg`' );
define( 'NONCE_KEY',        '~a8,bY{S-@>E~<dD2mdc4y3A1!eg4*F%[InYsGK2ralkkwcvTLd6ySN8u*|LQ+w&' );
define( 'AUTH_SALT',        'WIQ^2tT+R(2&& yr|W#5AM/l)N`?[RRr}{?2L$;5,sE3,ahMwQ.w!keIeYtxxZs ' );
define( 'SECURE_AUTH_SALT', '<<?S pL!*Q`xBx8-6|jI+G=w`5[6Nb_i4Ee/r<p?-aJvw@mIRYQu,jDaKGhx8$%o' );
define( 'LOGGED_IN_SALT',   'Yz25>0w-1eG89TLUp=0-d&bm2wis%HowNk.m-^k[m;[8kP!y1Pxj30%UkF+;a}a,' );
define( 'NONCE_SALT',       'f`Q,(+8FM`}]wUaS;zKHk5Fp:#sgQp_#2]=eVA|#`0a=p9@oA&Yo]cdZTr+b^!_x' );

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
