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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'thanh123456');

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
define('AUTH_KEY',         '>,X(,BF(dhJhB+6)ZT}RL5#1Psf]yQg)=]2c B<6r}+da#&z.(InPS97~^T/B:Qs');
define('SECURE_AUTH_KEY',  'Jf_g4K?Hg)wX>[G:HWXj 0{VZA?hR&a>$Eu0V:(Ir950,+<lI.r7X%Vs].W]F|9B');
define('LOGGED_IN_KEY',    'a2V]oI)j?8r@viytKxEnjdrV(EB~5bYrE#VUo5#nmrn;dk%xsr02p>sAe}vo/{@u');
define('NONCE_KEY',        'mR.-1e:T(CBDL%xPPI.#VdARjX;Q4Fo`W($NZgu<aM;V#a!}+_>qJ<&-IzS{>W4b');
define('AUTH_SALT',        ' M]#B@]!QJL$=~u_[qtTYdV^K^Xl26XU.bjH?0R_}>o<2 ZkvqUz1Lc@b*=Qt^jB');
define('SECURE_AUTH_SALT', '_W&53w*[u|oG6Z8w7JBf~}P,n{A.31|u.8&D?O1 U{2c(&;MedymXPSRm}J{FC{!');
define('LOGGED_IN_SALT',   'x>-t%0.4`B3es<1ROvHdLPI-{Hv0t&=%n4NJvq.u+@z)ubp:0)vhsdjq@<D(=,mR');
define('NONCE_SALT',       '3zHkliM:y7LT!x}oLqXd(5fU}L1WvhLru2S/glv7n)}DG@Io-xK+l+1(3Am74kA!');

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
