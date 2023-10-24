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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_ecm' );

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
define( 'AUTH_KEY',         'BH-YaNBMuf~CQJvN+-9O.0$Rd!=7&8t)C|lARI,tW6X(5dAIRuP>ni3a;J!eHFc_' );
define( 'SECURE_AUTH_KEY',  '.;bf*3cH C)t*A.~KC&@L|.aw780bQ/3V?+-4K2FbS.HB#SjT2!Xx<a*|a~Q?#|[' );
define( 'LOGGED_IN_KEY',    '%;s sc1fW^deOvl0KU!IX^9Axw@2lX!b%Sx.6_75cy+Yb4x2.ncd=Pa4|=W#>=E^' );
define( 'NONCE_KEY',        '4R*;ODvXRERN(=q;bwizk:ORcwuQqI+E[jH[VXqI6+9Po~!rNP>RD/sz@0JF)|-I' );
define( 'AUTH_SALT',        '4Ez. 0$V|4-CFS.;]@hz{!+vSN~O+kicd;$TENR]6wO+:Jq0~Vj^|5UnJk]@ZNJc' );
define( 'SECURE_AUTH_SALT', '9(V3LzB7,wub% cE)<,.A5WNxNNrvl5u1,<2s6k=HFX;yK27N#;#K)Y>9:+k/k9h' );
define( 'LOGGED_IN_SALT',   'Mx1rYNnnd4D-]vyjq)pO`xK8fBL+fNSD399a(T;,/GQw0#XTs3`,Ugy9x@;6ZCLe' );
define( 'NONCE_SALT',       'p$powc~=86>u0Fn]JrCJ843_H1qaH,3A$0^kRT87/updL_@(OSiDrWP`}y/[;]ZX' );

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
