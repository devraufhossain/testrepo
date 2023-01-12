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
define( 'DB_NAME', 'testrepo' );

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
define( 'AUTH_KEY',         'Y}8d[xGk:z$tWj7a1d]JQA9^T*Uujs|Y^5$,5 H5Ar.F69es4Kt?wVZ9F_-}N6Sq' );
define( 'SECURE_AUTH_KEY',  'v0lzi)Eg2ng?`q~+G/d CaLtwbcU@Ve%lB8GS;2NpV]NWxR;Cthdwr`1)<}f3zY1' );
define( 'LOGGED_IN_KEY',    '0;.sOFv3:|Avcm-Zt@ZcqmrZ)0~C}<,&tjt:/4$r&1k|MFB1XR:26fu1cHF&NMaC' );
define( 'NONCE_KEY',        '5seax~M4#r(pqeyt}+F.?pPa1dGlJ]`T0PDE`,:5Vb*_oRy9<Ga-`mrn_lE3J/ZR' );
define( 'AUTH_SALT',        'Jaf/s[S<J-U)0vbkgCPw)&X/M{1k$:`VXXvK/#2=*|VPceS`W{[%L{RAy2:w{*X`' );
define( 'SECURE_AUTH_SALT', '0!j.x(*QZ*eqybO~/Ag:{K&VP`yY<7srZ%m?+pi:J=9THxdXXp8ZM!^4cI&^R}[X' );
define( 'LOGGED_IN_SALT',   'rP(q|4PI6{B[GaN @RR-6SO[K6v=tLq;2YpgjmvAEft|1BGAb9&Pu%k=gj3UI07V' );
define( 'NONCE_SALT',       '=~$T-U<[x{Hz3<)rhupvlp<ym}~b7^Pn6]V~2;Wz~lgVWmj9G_&&$.~_m(jb~zAo' );

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
