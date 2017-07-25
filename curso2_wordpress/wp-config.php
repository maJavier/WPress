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
define('DB_NAME', 'curso2_wordpress');

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
define('AUTH_KEY',         'p- Cyw!|Gb`4 kCGs##@~Ufk]O(_[Cs NY/$?=AFKT7O%zQeA>* eX nlQSMxW,j');
define('SECURE_AUTH_KEY',  'I0drn)b6bFlKHK@0s;gK}pEGdyGb9p.Z;j5>!vBlzk3dw^9jR7|dP]xD*C;GTkk%');
define('LOGGED_IN_KEY',    'v6SXD~,F[M?&@Q& ?)|ZCC5q~t/N23VRNa*[Km-+37ZIzl.Fm A<ry$Pjq?Ef;`<');
define('NONCE_KEY',        'Kq%E/WG4m<t<zDao%jlx)DeH;} WY#Pv5H)LgG>9yq~,zz/U vFi6-uP@U7R)XeF');
define('AUTH_SALT',        '}1tvQi PJ`e5IjhY%3)K-[dj*Yk*w:t6K3`,B:;JmG8Hn5`.#eh_r*=:ZVIm^fLv');
define('SECURE_AUTH_SALT', '5@<e6,*5#oud2mVY/nI>{Fjb>G`fY%N$`iNJ-^desfE|i.vZxeydc*Cq{GXUVv|M');
define('LOGGED_IN_SALT',   '#./0|st;tjTEsdYSfk%3a H_}.y9+O|/Q-hqLoF/F|MMjJQM2`ME]Lyl6YTPbGDC');
define('NONCE_SALT',       '7@1r80p/iZ*jj}?aUJN{9.wxJ;`v:}IGQvA/pP!4kw~DG|o:0vIg[ldgJtdOV/X/');

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
