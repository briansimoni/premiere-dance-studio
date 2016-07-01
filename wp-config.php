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
define('DB_NAME', 'pds');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'XM~p7_V]bUNO6{!xtE),)F%HGlfv99wRK%2{l(}?uTmT _>v?<K@A4;B`sHOrGeo');
define('SECURE_AUTH_KEY',  'K^lRJ#|t&G/+Ff?;>H6BiXW %m2HM9=G^=E?}$~3^ *`;TnsVfS!92EiB0EeqjB=');
define('LOGGED_IN_KEY',    '*26BWHp(~{ru8G5C{Vd`q:ybDbI V:2}1-@wWJm605zQpm@|)gs5.Ja-o#f8?)> ');
define('NONCE_KEY',        '9=0oN!t.Xr~RqC!=X0B^DJ9p$j_K%27SJiE#h-(:;f84uB2[SG`luYCTKCar4?5p');
define('AUTH_SALT',        'rZK]Z[$,`_4cQhr:7q7j<ez<FZ+hI/}l.1|Cxv2Vlx8-uat-7XSNJ+qk{7v1k5!|');
define('SECURE_AUTH_SALT', 'j_E8s>j#$r:QB<#o{tAVf!1Zm)Two1qV-f)%pjahk(~UgK[p[[B<NB+*RXIITtFv');
define('LOGGED_IN_SALT',   'j9,ThH73V|_OV6Yr)e^vph[/@w>=Ffu{dQyr<pWMsqWnK7~qdYYQ=3D&*B|04q&n');
define('NONCE_SALT',       '2m3GTM1x57nexty1h64Db.Y f:%olc7w#Vz.4bM&daDL]CKA(=|;g~0Z7l`?:C|.');

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
