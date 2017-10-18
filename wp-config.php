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
define('DB_NAME', 'mookie');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XG2]`7wo&>i>k)p/e$a{=LsiDJIC`Y;_{`Q<F0)x+iX?<_SBvk%Rz1&E*ph Fg%_');
define('SECURE_AUTH_KEY',  'zp+N~@v5$MPd1K0Nub;21/47AY6,s~M0A&RuR*yePRxBH |HwHC5q)2RvEly<^u(');
define('LOGGED_IN_KEY',    '~8 3~5Y;@/x`b6.p}<7W1#3U>EGrWs|sdO)f%j:1p v6*jsv}65ggMnRo`@Q[Sdl');
define('NONCE_KEY',        'I?{q[KW:%3B;7|-mUjGkTLBIbA;Z{]di(rQdS7]EJ/oQvcK bt{;[Ma;@*I7ER|[');
define('AUTH_SALT',        'Hl8Rrtvx9KacSYUv|!#q38D1exmNW=U]H41ZW(a ~NYGsuT?U!>wF/+;_>My{985');
define('SECURE_AUTH_SALT', '<7?q=w0{e*iSi;F5/dq@/#Qc*$zQ^i0&c|RA?[d]xvZ_Hyx:NH#vt}vr3?B|O*Lc');
define('LOGGED_IN_SALT',   'dH#l6q7PTR]#9sXVrnqN<?Ue_C{*1`oy5g/COq:|00#i{fxJe4TEX_:WAl**lWyh');
define('NONCE_SALT',       '5gnDv]{cAj},?1x6&+*#ve&7dO{BRiHwGwrz@4(`J=RwxD#ALF%jo2NJSi@EK_BM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
