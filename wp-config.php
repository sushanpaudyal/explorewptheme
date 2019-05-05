<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'next_explore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         '+z+^k[JQferL#afqEDiCj3aGomv0~QN.m&A>rHR0nC-,6th @qV}p_kC1ldP:=8G');
 define('SECURE_AUTH_KEY',  'R}SJa#MxEQKRK :|J#YV8^r+2sN9wD.&QwNTP#z*Mmq(G>O9z(-{psaR UhK!F/E');
 define('LOGGED_IN_KEY',    '])GC)4g#(bOCsz#ZAlyCtT6^B,}Xg?@:1yM`iIH3?R6.b7FX*Q^IU$83H1)8Gh5H');
 define('NONCE_KEY',        'DQV$K:,+4ocOE&Iv8B6o+D?ZRo|g<VF =%msCy%vr`z4M4+w] 5C2|-4!f{Iv8Fa');
 define('AUTH_SALT',        '7<BEdIk0>egF~Y(G*k*tCHJj`lQcH=tB5^~+SHvKP)J5OTseI?_zSAvSAu[ WTjy');
 define('SECURE_AUTH_SALT', 'C1}ur(;N92&-6_p|eKf~|5)_nj1~E[f,P xN$iEjIhdrL Qg!AKv luOikQ/c2lp');
 define('LOGGED_IN_SALT',   'AXmK6Sn2Gy9Il+H;3h|[*nMQ=Hj-h6W_q3TY[1N10oy04F`)SB69/Z+yA@`WeZQv');
 define('NONCE_SALT',       'rG]OL8Tsab/V -qfjJh;NB)Ex!V>N?<T{#ec/-Mc8)v$-DTjA4^H<f_H{QFww-*)');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
