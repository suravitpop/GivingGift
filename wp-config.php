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
define('DB_NAME', 'give');

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
define('AUTH_KEY',         'l`Q^f^h+em2`p$/b6Gdyz!v2MfB[HJ{^9j78tKG=9|voO !%I$}rjx^a0c]g{/5]');
define('SECURE_AUTH_KEY',  'o|mT7)bkj=O>{+Knk>L)?/`yd_tSBnt-.$6_Z+<a78(sql+nisJAiz+>E@0Kl0K{');
define('LOGGED_IN_KEY',    'XLe>e.-^9C,Rbn.d*H=#GMS7%H3v7K$6N]C@SWO_>q~179%_tJ!6M;:]3Tk_5  E');
define('NONCE_KEY',        '@6&A4nx}lgGA+9UMi2_?UR85D]f_wvd_uubA~8uM=!HH0UP*My}W/NFDdi:k0rR+');
define('AUTH_SALT',        '8=@57ipo)7`cJFH%6eR7%AU(,~Wl^;T7u`tIXZM~xdUdPzMLin%MH,m6_o4a$_:h');
define('SECURE_AUTH_SALT', 'o;q]&kQyM@G/|SbK!X!AjJj}r^nXGIobicFLsK3gd?1F:- }[UT4]:!0!PR&)ka<');
define('LOGGED_IN_SALT',   'S}k/t9/O&Aa0Fg`{0NEMfUrOHer-)4[(hOGS+VibSSbr1:M]7R]{5$:UOBYxN^Xb');
define('NONCE_SALT',       'zKw~L5Zmfy7F(2+Im<9z]y#aY}ZxtSg1:?&as1CJJRf7hD+>(Ds`pqW]*vU* He@');

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
