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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'Qn)I?>0>|*^_7b6>uX+4C()u7]n<-S+iT?tWnz[UuCA;ekIvykw~TQg3iO3+fQ!`' );
define( 'SECURE_AUTH_KEY',  'kgC[@ODm6_?u#m6;{#v3(l7.2F.PP7.MsnU>n0_eu-]]2vAUQ6#QJ F=_$`WuK~2' );
define( 'LOGGED_IN_KEY',    'y}*@T8<f<q}]/oZz=*L28pu!XX&0ch~x*1p=:*.W,d$&0Co)T7(t1Gl4y(8?3810' );
define( 'NONCE_KEY',        '?E.F&gkXwlOli{X+3~N#*}[%+ bUb#G{0G1-cY5t[D_C_1MsiFW$-eQhe~8Mkl%m' );
define( 'AUTH_SALT',        'GB#pWg~LE%w%~bFc?ic^~KC2x-K<&(Dfw/{sh$=E gQOOK1Ux#vi0-,geF%1o3l:' );
define( 'SECURE_AUTH_SALT', 'V7f4lFeJaz3f4M:hE3F<7aD4@MJMW3(<[};uK_szOLj7)}s_lWt{Uf$d}VFF7bJ{' );
define( 'LOGGED_IN_SALT',   'e*Kd_0:d{cm$,SKQt A[-ZrcpTiEg6hll^lHEd?|>?x{1p96l77ON&2w;*_Eiia#' );
define( 'NONCE_SALT',       'sDV$O,NFqdII4,h)fCJx^6[LHm17ij;K@}q3vrZ&ok4|SxxDfL)oy-_r?%HC: @Y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
