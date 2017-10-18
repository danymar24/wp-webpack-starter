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
define('DB_NAME', 'wp-starter');

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
define('AUTH_KEY',         'BII2s{hJ3&=FI!%gI^qwb:A#D3e<+6x=Z]zfD_=;SAsfQ6xS.8`DiK[$uXSL/dN ');
define('SECURE_AUTH_KEY',  '`>RFCAt@cJWX*AImj7mxZ%((0Y?DhDp^{N:/4amXfQ8jd+1)DAS~8_R4rXyuZ{E-');
define('LOGGED_IN_KEY',    'oq)t X_rj=@[zK=#d/94&52xK,HLNPMYQVqdF4e024z~1K+lSwIBj=h}&9VSZEpm');
define('NONCE_KEY',        'tWEFLy2ki119UX7(tiVoVYnfXN1qTC|m.wBcFQy=UP9O_5:,tfYW(!(U|kB82uaB');
define('AUTH_SALT',        'wTlSTQ!8%Dc 1iO:[yyVL:~6AIC<~eI4s?l3675[6suV,fS?i4cul5ME#e1,8Sdc');
define('SECURE_AUTH_SALT', 'aPg9:`r/{|wfoaAvoVmEe$GL+=s-un2p2f%,hAe`ebS8Rwh0-z/H]=~=B#l>kz1n');
define('LOGGED_IN_SALT',   '^ST<y)gpqnT5ueb9FnYpo6AOTa|IKs#2Wsn%<A~;D4z[woW8^=kVf*.UbfN@]T^Q');
define('NONCE_SALT',       'HxW$>&w59u5QhGX]R4^N<Ebgm_,H{^n}}u0Ha^b*3 p]Hq#?]6t{8-iL%.`xMg:{');

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
