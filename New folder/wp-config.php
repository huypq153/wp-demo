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
define('DB_NAME', 'inno_mathadong');

/** MySQL database username */
define('DB_USER', 'inno_mathadong');

/** MySQL database password */
define('DB_PASSWORD', 'aFn8ZB9NdGCQzZ27');

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
define('AUTH_KEY',         'zy<XZMGYZ.+pmT@~#,%-L5Ksj_B/1o9Zg0P`hg-Yu^&Al;c`AyJa,a8%W2x(~!gn');
define('SECURE_AUTH_KEY',  'S1L_r[Xo9vAC}:3&m~+C/];qX*1e!oF3Hb@Y9Po>4GZ{q5;Y8yZ#)RJt:9[K{5Tp');
define('LOGGED_IN_KEY',    '#]G;u)wu<,wv!j2<%zyobKuAyqK;zrK.%196k[Yxt+0=Uc)DT=^Me5,q5r`|bWiH');
define('NONCE_KEY',        ';r%9Yd6__;[*4.tl#T[QdY#c!958/#:K_l[{``p*|*Gw20/^Xpqyf(]bX(%~lRV`');
define('AUTH_SALT',        '77<`;8Ez%pC^x;{Z6wB+pgA XSz_*6@CMtD.DBGLAIW3N4xNnX+_`ns%bh5CB6$$');
define('SECURE_AUTH_SALT', 'Vog ><**i,r11gO:LVEx{<qUc2n]/x|MouC8my=oe pRwm~.b?]djSNT67OLqd&2');
define('LOGGED_IN_SALT',   '!a%i.@,27pZYi9Y8yK+{GHY-{f+Eg}()3CM@AD2~W;F N6,~)XmyrWR=vk#AaVOh');
define('NONCE_SALT',       'tD!CBeNLT-16OfeiU}EV$i!P-.[BA&aec>U}HdUu}:s(_Bm?I;w&odEUkC=i4cFE');

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
