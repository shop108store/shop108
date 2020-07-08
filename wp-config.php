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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop_108' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a_SUIi1kMu2TKJ1ni%$qO#=$F}y@]~-*qrxTf6[}#h,ReHD0Nz4*Nh^<+>w5,~h#' );
define( 'SECURE_AUTH_KEY',  'J:@jN.t6C1B<.9#ny;ntN.mC4XXrt5}B_4LbLY5WbD6//!sA6]nXhl+?^r$R+pbu' );
define( 'LOGGED_IN_KEY',    'R^[!}P8 7F>!{cL7F9-ZHer-V;RqH2k@n}@S-k#+rcm2>sg;F(,d0@C#OeU(YtHZ' );
define( 'NONCE_KEY',        'NET,0~aJ~;EW*,)ggR|;rSbp!M8ZwAQ$K}_QDB.J/CO?ah7Duyhq/TC5IBQA4PAD' );
define( 'AUTH_SALT',        '1N_bSj!9/u8/4WX~*nJ+OBF^)d_q4_<9Sjz2J[FUKSRHMGP(Fu>lFh7t#]Vh[/.R' );
define( 'SECURE_AUTH_SALT', '<|~cnyWJC5 Qmbep>=dgH+{GFZhz$6lSrRa!M PtB]mYm!ET_xr_{g9x({,i^uY5' );
define( 'LOGGED_IN_SALT',   'CN1BPb&C3*k0=3=<<ks|O4=~z`fZ%!&lWf%oo{}zHo8GSn!o~|{iI~^P`$5dHjvB' );
define( 'NONCE_SALT',       'taC4mat5?7xe_N2<9Y`HNL;e-|Xm?f.<_(]?&h7[SSoiV0c8L|<=FPSa|cC0ER.z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
