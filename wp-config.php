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
define( 'DB_NAME', 'gdpecommerce' );

/** Database username */
define( 'DB_USER', 'admin_gdp2022' );

/** Database password */
define( 'DB_PASSWORD', 'ganeshdeep1122@#$!' );

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
define( 'AUTH_KEY',         'opmA^6?>q~m.7[9mS$NuHX@Ps4SSiW[hR,<@|Yg28ZAZ1_&*IeIrQ?M!BO~=jghC' );
define( 'SECURE_AUTH_KEY',  'f`Ni.lf+@wSjT8.M(=%x0j%(z;Qs%%jKB]n^AHHz;_<sGO!zq:R u@#C|dsQ*F&~' );
define( 'LOGGED_IN_KEY',    'MA+l-)@sw{JU*jO~s]j^iJD@J5-ULT+5.*6CKW.)Ua/+/6b%tlw-X2wYdV2,arvD' );
define( 'NONCE_KEY',        ';D<J91Ml<Rrno]ga)E)F1b2g--rvp)S#>%&8#d(%Y[Fq8wZ%1RlY)7~<?zpFTx]C' );
define( 'AUTH_SALT',        'Kz$V,62O`&V5tPtqoIL@Mx48d`=4`!TAP1:DE=THp!v1F w6]<M?Gc#/d8S{Dg/P' );
define( 'SECURE_AUTH_SALT', '0~`d[-^k|5Cpi~D2R{1nCL!W{ulumw5[_5yp6hx(9]Pu @n{](AVF)2l.3LA1b#&' );
define( 'LOGGED_IN_SALT',   'zp4>y^19r!-d6!h:J;5 XH.xr7ofgXUO]Q(`u.ehITaakxl;uCeyEu)^>CJ7+Ayq' );
define( 'NONCE_SALT',       'cHg<sirXp!O =dSV<}./>Rxn_*sF*j]e[uq}&0BYva5V1jKWi)_I3kB DyQ5TYCs' );

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
