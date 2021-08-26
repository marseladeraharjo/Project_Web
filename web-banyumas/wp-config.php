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
define( 'DB_NAME', 'web-banyumas' );

/** MySQL database username */
define( 'DB_USER', 'admin-web' );

/** MySQL database password */
define( 'DB_PASSWORD', 'banyumasan' );

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
define( 'AUTH_KEY',         '5Gr9xa^Gyui0!5~VX>&1;5nlIZU4X *J8VZ#=&q$KA!d a|Ev}Q1c|M)Vk`8?qvJ' );
define( 'SECURE_AUTH_KEY',  'Qw>KetE|B.OMFo+v09 a!8[ajKGR^CI0rxv8%B4:A~N:Eql|kcbmVLp@lt7Gr?0L' );
define( 'LOGGED_IN_KEY',    'qfzQeef(Ci;~C_G, .4l C%IAybQXF@Hf&DOS#(]Iv9hA:v7P%3uK-W&7Lf_1D&b' );
define( 'NONCE_KEY',        '}W,zK)xYvBunHF,8z _Y),Ya(<pIkTH(g$2Y.@)g_/wi4X_ckcra/p]f1FZulDjE' );
define( 'AUTH_SALT',        '$P}0u:?PHprGg7|IV6,s&}B_kP+/#;rE_jGR[Qg&j|(!lFP}LC+Lh(Y9vXVA<-F4' );
define( 'SECURE_AUTH_SALT', 'toh,<g+yu.P{rJ|TMbywY)6O{F[Y--i0Xz4{p>>1h16~<O]6>q9H3`sh{2%I!fki' );
define( 'LOGGED_IN_SALT',   'Drg&x=?k#t0K8kX}AE#82ux2R*Ap=Q/Q54xUXIu{ef}%KKsue>1HUZQE).g:~D)P' );
define( 'NONCE_SALT',       '!`K_=PKPgo/hqBdKvZ6{L=q;Q;-EcDM^Xtp?,eI-in!5;LgBpye}qg85!)R?[p1b' );

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
