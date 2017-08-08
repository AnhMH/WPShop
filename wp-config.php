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
define('DB_NAME', 'anhmh_wpshop');

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
define('AUTH_KEY',         '2gZ3#1bTOKj6Z><!_*ZQ# [G@ [R3OH`&nRlXD%bbkd6:C23t8h~YW*nlkofEvBz');
define('SECURE_AUTH_KEY',  '&R1XPf2RY4P03vCW@OI# r[`w8L81?:nFC[5z@?[?2ctL5g=~{Hn3ZzI7mJfX0i-');
define('LOGGED_IN_KEY',    '1.[hC}_RZ9s)G^?kf#x?M4))8vD/n&H#)b^W6eOu1Cym0AX<pw@Cl-D$ _)du#XS');
define('NONCE_KEY',        'Km},a:|bL&IQCKv|IR^6o-.@:--Ig&rokyopQ1795&^8,y<%F2:7PCU:eTqfSi*O');
define('AUTH_SALT',        'vgy2m:~ks!+~wvY}E6J@{mr%ud=/b2@.Q`e9}r?(-phwMq^?@`}&->@Z~qdmO~)(');
define('SECURE_AUTH_SALT', 'o=[Ye/J[^.DT$qYktZ^Zj)g0{rv$cm,_/_C#F#cY;`,AHoL3Oe]90M,yfW$q!q%!');
define('LOGGED_IN_SALT',   '0)}yQ5/E0E`[i[(QF).^,Mp6vmQfqr!:3I76ty7rE!}C[7`&o;*s#9Ow5?JsPi}`');
define('NONCE_SALT',       'Q;/EAK#%c6E0_.;@h[tskwnuVYk*RAQBG1,3/-_bvA=,thlWSp5 FAE%&<J$`8a(');

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
