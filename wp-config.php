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
define('DB_NAME', 'ambitos_wpthemes1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         'h360|+F9hZh0S78`4]N8Vq6iY)7HnATxIYQzE/@X5aK/Y`krEVCJ/#6N`e7Q-miB');
define('SECURE_AUTH_KEY',  '#<dn<jm7+?NNq|+=?pE<UU8Em;6uHprPEqiZyB<=N-nwfWD(L&{jOp).<8=V]kBH');
define('LOGGED_IN_KEY',    '}p379-=`i:XF~8d< =NQ_?`=7rmY|08] >.aYmdr)KP@:a,[f<vpM}wz/#ib+|e,');
define('NONCE_KEY',        'G0 n@}beK3,;ePc6b9DT$v:;-|C,x4Z2,SZr$GO]W) 7}]ug$,e>p,jTJ{[n}2{9');
define('AUTH_SALT',        'jk7d=vdH,tH1c7)[A)M18.TVw=J6G}8Ix)*v~a;`Q&~*Xr^)e=L!r}}u]k$C4p,W');
define('SECURE_AUTH_SALT', 'ZM6HGGPYMvDe1g`/,=6-%7embaT2s6fUpund.-dRH)k5lA7{vlksND.]p}{pTfA[');
define('LOGGED_IN_SALT',   'uptnN)mO/#5/zI#nWp[OtmSl.:ANY&`&#3cI:(`,&KiL{;D1r.uz#D!W7o n;rC1');
define('NONCE_SALT',       'mL#G::{kOCHrBQLA$g[6,ie|=7/*r]!q$q,H!/nS%i<5~qKIdaGc1<fV|#*LhaI4');

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
