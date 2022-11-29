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
define( 'DB_NAME', 'mywebdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '4/nC$&}W*fQ2Uz|`@@5G;6/udF0((M5j2,R=Kzc:h:hzot:uq0&!%wg~`g{$!Vyn' );
define( 'SECURE_AUTH_KEY',  ' *_GXkq-8S<VoC&3{wUG|nlm;<4HkGlw#>.~bEP*7:xQGr0MH+j}|>4#o%2OABHp' );
define( 'LOGGED_IN_KEY',    '[JCjBGo[^)>vN/z}^$mSa>GPO~h[?F=Q ?]ZyQqfS6Ne9-q9^Rrcq1<3ed<A_l+#' );
define( 'NONCE_KEY',        'd}0OWWFRqsV8R=[A}dJskX1=:4Zy1/}ay!7e1xkN@0JmNB;2/;l82ijd,V(EJA5A' );
define( 'AUTH_SALT',        'iA{[DgWQl9DuPo.<&w2^A27$X5 @jz.lwKk[q/F[bNF_)eiUofYq}P$!*BuZ:g:G' );
define( 'SECURE_AUTH_SALT', 'AZsd^rT:$&p`,O4xc#i}j9i&Kg7[rFA,f|cwsR8PSRseHh97=@[F+(#iQDjS6XKU' );
define( 'LOGGED_IN_SALT',   'Sjd2;f(J%X9v7r1uU pKc?0(hW|-LqA<ki:g+|D(`,e`NcELp(*9y|DS?H}jEypp' );
define( 'NONCE_SALT',       'R7ysox0 tnUrhmmAdpMnoJ4Tj~~kf$0n?>0p+q}e]NgJ?>tWyl2d5z5W*<#%UntW' );

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
