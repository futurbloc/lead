<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lead' );

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
define( 'AUTH_KEY',         'F0o%EE2>40|}Klpeivh306^QtmmH1|j(uJA0/g)9vicTAK2sW(>2YIVJ#zP33_#|' );
define( 'SECURE_AUTH_KEY',  '%Q7HQf:SQgWA(!gPk#b H{+N5a<ASvdj(Qt[<A`lqx`)C`$P7)7,nQiL{o +t?pA' );
define( 'LOGGED_IN_KEY',    '4w@3a9j&6 @z$FuY4[2Eo?b1@jupE3stOq_`Z[$^&d!$u<0,zD&$=Xzu}rxpBz:3' );
define( 'NONCE_KEY',        'w~Oos[0]A;hrY 4RVW_Tx&(Y0p%N!Y&oP-wo=`3gYho3$eV &gN*)WOJ$LBgIp,<' );
define( 'AUTH_SALT',        '>/lZ)46fhE=EFJBHeBK?fbIyo}H5rQc+b6_?:;y-#f..E%HB_6%mQ$,-P=nFfqMz' );
define( 'SECURE_AUTH_SALT', 'bi%#xVf>:owF=x+1YYD+6-!V_JYR*faj57qZn`1AvB(ax s0Uo{2]#1 XSvdPI1b' );
define( 'LOGGED_IN_SALT',   'IXV8/,!!4bb`]aDn[^*_?rv[8WSoUfRj{LzZRKJDIi%k?B&rVQQD$DX8cURCidOc' );
define( 'NONCE_SALT',       ']pQ  +,6q,tp~s&mULhMIe[9@R)a]?c(0cUF!c#w|y})J$xt6$?Oh`bH@;4B.M*M' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
