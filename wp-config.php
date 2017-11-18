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
define('DB_NAME', 'nextpo');

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
define('AUTH_KEY',         '_N+f/kdtmZqCR.,xBrc:WeHYKL4#?v<Sq#*I+7@2$* zFMcxKoS9D|F4iVtpT@9x');
define('SECURE_AUTH_KEY',  '(pV|N9*cM)XgcOwdLd@z$Y.Q~=CfO}@o7Afi<#1j}keb/NW@O}RLia]mki<~KT;v');
define('LOGGED_IN_KEY',    'jm:>TSuoe0v)sd/rNPBk~[b^}34e5-D$QW0-X7)2Mq`U0>AH-~+$;jj}ivpX&:6(');
define('NONCE_KEY',        'Lh+2#gni3&=O5,c$Ug>{x<Gpr-j_lvM(J|Qbu&o)rc+C?S!cP}v=HzRJK);PAmfJ');
define('AUTH_SALT',        'PRlryizI8$WA0C o@?a(5<?7W%g3|tJK4(/%>v,4.6;&Q-fg.!6F,X7YTH9-5} d');
define('SECURE_AUTH_SALT', 'quAC;l0B6]cSl&fo XBH;P,#Y]5GQ4.XF#Ks9~D(oDM8dHGzS|i--~e1FU9KkKab');
define('LOGGED_IN_SALT',   '2nxC{&73vy,^1a&Sjvh`Hs.zq;FnX~(aajRr^=6=6v6|ECSqc4=vzq*(7~f,pd/a');
define('NONCE_SALT',       ']-[r5Ynm::Y(OzaPZbVONaDvW 4BsVA2IQiSVM[kj7B&1g3EI,)=R{T(|6^8<$OW');

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
