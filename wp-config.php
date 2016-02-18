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
define('DB_NAME', 'eia1234');

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
define('AUTH_KEY',         '?$zWu|^5U88>ox!J<s!SKh4lH`|{+e9r+ctvfA%RdI|3)2C?zbB<=|FK{+#_+2v9');
define('SECURE_AUTH_KEY',  'Wl3LJf3d nhX4m-@tF<Y7yIMI_q!+<qLc07O:+DOfd~if!Sc<-)z/[(F`hmw#7;,');
define('LOGGED_IN_KEY',    'svMhAeZfU&|fp+?,}wp8F%c)E3l}2y=|+e4<DQ(Y:&e*}Y@RE/A5+f*5k*r(vQcr');
define('NONCE_KEY',        'GR,QR#8-L7G?HetfP-z=kUyF{FZF#_t(eYCm|0a_@t/{xw7CGk]6mwTb+h/&}c:O');
define('AUTH_SALT',        'c/V;Rq5>hNl5VX,{C9JR.|Dx6&,q-+TULQ;7C7Jr_OSYY}y y2oVRMORNb]U>Bc2');
define('SECURE_AUTH_SALT', '1Rk jNIIrySL|?$E,hR}X948?S_|{uGczmqA@_&#yq%h/p6z@bdCUMRq&uT||455');
define('LOGGED_IN_SALT',   'TU:c+)XXQ-=,t*Fjy~7676F%@)sd|OV0nqRqe%oAu19<ExVv-p$?S7avw!g+PL-2');
define('NONCE_SALT',       '<55F_8[jLuJX+j^-=[+lshHltImU(A/)|XXs6YG{NA%ODovahvYNYnU/][a+8G=7');

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
