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
define('DB_NAME', 'tuyen_web');

/** MySQL database username */
define('DB_USER', 'dbadmin');

/** MySQL database password */
define('DB_PASSWORD', '123456x@XTW');

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
define('AUTH_KEY',         'UMr*wufF}{4F~<,>op@gv%W?AAhDt?Pdpwe=:)jz)oik;wrx0Fr|[Yc`5%y{NotW');
define('SECURE_AUTH_KEY',  '#^<s%~gM7p%KlN).K:7(.[+:-9Odkujlm!!#U[iSB5s1@9mzJh=n X1s=OUSA-,W');
define('LOGGED_IN_KEY',    'iV`iYzmu/y0G:+)[C;xqTNx,#VQTlC1K}dXi.oQNKw=r|^msGjt70mn{|^OoMyv9');
define('NONCE_KEY',        'H2pT]QToawGvV1Ls&O1{SlChP7SKA{Ta<QVsgwe}5w(8J/7&,j{F]~txMt)igc+a');
define('AUTH_SALT',        ';C*{waVXr63?4}55+E%gmf)aXV8WpFmgT7Y}Y9&{R*{Q=&[e[Iw?(SDI[B1{*sJ-');
define('SECURE_AUTH_SALT', 'mT~3:D#YQ.JoO8rm!&%7r{1l.?^brDx@>:{L,uCP!*qZWW-GMYCL.H&CT,H{h.DC');
define('LOGGED_IN_SALT',   'S}h5b!z_^b<]tv<p^+)t7}M=muYP!:Bb(}Nl7<cna*N7T|Mt~jy)Y?iCDAlN2@)n');
define('NONCE_SALT',       'P%y,AJ39b8LgRpw)%y rz+^]!^.1B!tR|:Ul2y+w`!-Avk:<1 /SQy!u]u46VVB#');

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
 
 /*Real product*/
//define('WP_DEBUG', false); 

/*	Debug Environment - Need to Comment all when in Real Product and set WDP_DEBUG as false 
	View log under /wp-content/debug.log 	*/
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
