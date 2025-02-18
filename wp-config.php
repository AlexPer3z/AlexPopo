<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '{Yugu[v=YYXHW#oGf&CqFnoF0&c,O:pY;>K?x7E-O-CwMS5|_yMIS9XTI@(CE4w.' );
define( 'SECURE_AUTH_KEY',   'U|1Pl<DAaa,4YziP z5P.RiH$ #WZa%dm-w)@FtB-43~[h:Y3-};8eokJf)->s@i' );
define( 'LOGGED_IN_KEY',     'M@[S71.l;sj+C%B55;f/N]-zaZAJeHvnp^tduwWti[i%m/E{pMc0C-G}8dc?;G*f' );
define( 'NONCE_KEY',         'J,tLWoc5I_/j>-H{9<z.L:w8A1+u|,[6 o{p*oepX:93fOEl$H;do_QGJMlT-f;n' );
define( 'AUTH_SALT',         'W -(:(KsS#dvNSGM*>b&U3%:t,)nQP{3P+i$r)d/@q9p0hFBX/Y3h`HktCIP=Q9X' );
define( 'SECURE_AUTH_SALT',  'r(#4Gb/{>M8]cBw@X[(,zI}eqI}n^Z9}0|4*._[Zn6crae~T[WnuDLqY t:BBD+0' );
define( 'LOGGED_IN_SALT',    '3W2vtQ({Ri:A-[t~d,Y5)~<dEaq1 WmEZ0#{,$fHvczX=,o+T1w9p.OqEN$LDes!' );
define( 'NONCE_SALT',        '$J-xp,0ES?H%~FX6Yg4o^WYs5WpI/o~O`}`G(eQ:uzZYvhqgQ0Y0ug9x**{cP;Ao' );
define( 'WP_CACHE_KEY_SALT', 't%.>9{kgy{uNt$!QcJeW`W?`hACJ$/ W%?,F^b!l8lN%{t1wT;B$I=GD|g$Hm$hp' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
