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
define('DB_NAME', 'landing-portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1');

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
define('AUTH_KEY',         '$G!*Lfg45BWIA9K]]q<xMv6}pzF^COH:l??YH]UNU{ a}~Xbd]k~{770?D/3_rD5');
define('SECURE_AUTH_KEY',  '?Wc4)?x+gY@*8xp=HR<OiUmBS*H$Z[hHU+b^obceB4.Wiln;^h<Z/k7G )iD0x/y');
define('LOGGED_IN_KEY',    'cSguT+ 9<pU(BFa`RW<?jh<.PqSSS`7&^}sf*7Dqg=O:yd-81?/e%B9Llj?Bb{W#');
define('NONCE_KEY',        'bw:1TOwTo&#6b=/ZTP~6P:1mLORPp!t_S~6Z1n_iWLLN4d/;8iJXYL;vU&eZ(^xD');
define('AUTH_SALT',        'f4WrdL:OYUr=0a?uY9Q[p!q,QR3z1V@*Je.=c;O&L|tw1Rw9e$a(BvLB&+rF$5aH');
define('SECURE_AUTH_SALT', 'ROX/=3=Yo7Os|CvOM9ps!Z1/G>fMDXG/f6G1PT`&D?aF!/iQ[Dxx%6~bEtJn<qkB');
define('LOGGED_IN_SALT',   '}lh<BAp3+h+d~N@)-)-<#ytGXn-@!&7C89/=#3x4bP2i~yEZO!HT#JS$S$E`bky/');
define('NONCE_SALT',       'WJ2xAC=I 8kl%2n,LE9h?0YmBS(/aH]NkW7YtYXD{99i7)ER>SEf}T~A5ARG$ehb');

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
