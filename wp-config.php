<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'itescia');

/** MySQL database username */
define('DB_USER', 'itescia');

/** MySQL database password */
define('DB_PASSWORD', 'itescia');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'tIx`uVR]m[I.t|^x1vizYc%Y W7M9lG05/]=q^N-U-w#e}5Y6BsG@h/%B!i{0]Q:');
define('SECURE_AUTH_KEY',  'Bx)D^#|d|ZmzFK!(qi|zV2f[0X,qL|IsT&F/+ BoiS0/|~p~~F^f(8;6a W^1r5j');
define('LOGGED_IN_KEY',    '6~cE tz?q}|@[SJu0&Y!Z(3>v%O(xq#3  6A1p^y%H]5t/3]-5`b D~k;{DE9X:&');
define('NONCE_KEY',        '!tN7i~IV1FNk-Xvoe``G-qj)^GG-RGS$$-mRu)@LW7t7P5<sq>tya2BX[h*r[Q7F');
define('AUTH_SALT',        '5e}a@JG[uWUeQbAG!}ov%A<;>y&f?O3xnS@x8&xeq7^ML450|6l8_-SNgIC-lXB2');
define('SECURE_AUTH_SALT', ',J$fxmGI,u=!#ar}+h958!{b4(Ds=V6B=R!K|1,Ah--;_vgE,R- V:!dS+8VY9#i');
define('LOGGED_IN_SALT',   '|>Uw#nE9W+0L@o.H+5BgfX:f~h~bGiHx]j$N4cLsKb0/1iK|=m{/w+0Grd`Vspz,');
define('NONCE_SALT',       '_Jq4%O%U7FTB!g${{QmjUS}k!5DkmHQ)Bri>N6l{9AoO!-},-8OHLaA+} vc)|VK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
