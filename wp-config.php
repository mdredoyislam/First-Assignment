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
define( 'DB_NAME', 'firstassignment' );

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
define( 'AUTH_KEY',         'LG0urK?j ]3y-SVrj*0j8DKU*I$VC%-J^zSk KPcQVv7-GC`QHnT)09C?&tR:h95' );
define( 'SECURE_AUTH_KEY',  'O(GAY!x[d-W<=K4e-RZKI}^dnV.HNQT/8~h,RVVtoxODZ)<>Cq{,~YGp0*qr<#<M' );
define( 'LOGGED_IN_KEY',    'ED5pG!lPU+>3gbaU`~*Gc?4QGyV:b:N9a<?2z+C{2{79m,EFwTVXw&N@nyS-?er>' );
define( 'NONCE_KEY',        'VZ7^eB:`Q!HKTZh7~ew;~u;.mdsTr@UY8oz]wb{Q5k@z =~o@.*C60QLM9cCUQXO' );
define( 'AUTH_SALT',        'Su)b_(*YDxXcjFs4CVmqA<KoCr( dtS6$m=u.IfD8:JElcQ1-Zg0+Swx`te^!W4e' );
define( 'SECURE_AUTH_SALT', 'Xlbbun}CvE:GQl3[4atUDxfmdX281UnlsU8D1rKi]VZ%D.Xr~XoUU/(DZf,~2/t6' );
define( 'LOGGED_IN_SALT',   'C=,]Mu`O|*&_WQ#.m0B6^8U1=YG?IG$cGmYu`A;ZCvtRE6!}3J#5D7)+0I-o?P#W' );
define( 'NONCE_SALT',       'i6cN=#{8_x[2e2dq(+irKw!,aE+%;la>LDUtm10o{K?<BWTT;8*.UaXQcc(<%(&Q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'FA_';

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
