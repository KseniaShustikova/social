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
define( 'DB_NAME', 'social' );

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
define( 'AUTH_KEY',         'OK`,krP1]7Vqt5XExph>od[_E^[-5YJ!nA_}$-<E5Ks.E-w5l#V9?By*xo};!gN-' );
define( 'SECURE_AUTH_KEY',  '! /0 c_oz<qa!7_@$olYTp?eF)4PXkupCG*D*BJD,jzH{M&8&NlxaiJ}?Fx^GC%(' );
define( 'LOGGED_IN_KEY',    'On=x%#`N39Gt!`umJ7jivzS[LBf<KV`u;{PnYH;n~2K$X&A&aj&fbdK_&[jFKM&2' );
define( 'NONCE_KEY',        's.?{H_3_I^F)NE=JCJm8IB)amYu1k-*;PWx9mw?*NdWMLV^r2=[b0?%)LiRz:l&T' );
define( 'AUTH_SALT',        'Zi.Ws|OPH[`1XwcTTj.RVK~_9)@LD%[>Z:0~{ReUt[/@<A]+y%^ BfJz&#0Go.Id' );
define( 'SECURE_AUTH_SALT', 'o:E/d! 2f5|zpQ cszGNaV!Was6@%*^nVuir>%aqq]5iH4<EG4@1nu7J&04JK?l8' );
define( 'LOGGED_IN_SALT',   '>S=~+>Y6#{=);m[WyM+U}>rSfA-N?mn.CW!nbFD1+TADS(mmi:6Opv2Fqo;ne;tb' );
define( 'NONCE_SALT',       '<KvT|>Nm=3(yJ^|h00XT!6|a~8}(Jk;Nhg?+n%P(_-9@eS;juGk=]=.^v/bF?9.O' );

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
