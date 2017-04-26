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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'Xh_[FWHWCG(*1*xbF9<Glo@XYL8OVr[-KDx{$hX1Z8(n|#([jr6;9zdN-(mM<j-;');
define('SECURE_AUTH_KEY',  '?|C0hvyCy_v&zX.:}tM[ n+Bo(THePq(u$;_wlc],*0*{it>;7_)8c2V4bg=~i]o');
define('LOGGED_IN_KEY',    'c]E; /g2=MK:ROdDu](dU4XB00)HGSOg*-gU!w-70Ub9>Ko#q~ERx7rs3x9BmHFQ');
define('NONCE_KEY',        'Qbyv0&hIj?.dRn}ELO${tN-$`_i!I+`VIAvw+kD`dhTLCE@X<%nVN$iC|w}yoL5T');
define('AUTH_SALT',        'e$l5xWUf0Y6;qbb#>n{1-! ?v,R=0#+YCzM[}O8a=YG+->CMC3}X5_1Rf`m$!VbI');
define('SECURE_AUTH_SALT', 'MC0pnhrC?.@geBIr)[VU1M~+PEH+0#HDrH4D$4SbPUlDofc4$h+{96pg#Rb-BrZM');
define('LOGGED_IN_SALT',   '_}{Z4ZV-6*0m$b#@>s!xsbUgo(PvEhBt[V7{>H%m~D75J5vH@Z[pQ|[w&SUwDvyX');
define('NONCE_SALT',       'LU1[_=K558NopK Ng`C/:+hs~.l @={J:ps]b/h+I00(Q@;I|hNGG(+7$SQXuTS<');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
