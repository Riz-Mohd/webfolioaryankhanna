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
define( 'DB_NAME', 'webfolioaryankhanna_db' );

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
define( 'AUTH_KEY',         '5)TD)so8?z-rx@zXP8{:UiWY[3[6zH|(i:C(V<?9J}=4 ^f2#`^cpI[Duk-GXthK' );
define( 'SECURE_AUTH_KEY',  'vcQx_yIT/~w,xzMit<.+OSoa]woV.5Y_)f4a>9{19uq8jU1R:~ucZbRW^Dmsi,fi' );
define( 'LOGGED_IN_KEY',    '(!JAU3dC|*[`atmO9;N8AhVa0=Va1f5PjPf)[|=)*t^bOQ^0)b2]}sX`fUD~2*3W' );
define( 'NONCE_KEY',        'LSH U}a-2B7BMunlJSVqtY&.K:E5Hz2TfPc65s68v96.?ww;V5`V7{2Z<H;dms*j' );
define( 'AUTH_SALT',        'ItK2}lm OcQKFY*hq.6J~qm^%=GkqC9}]m]>q;Eg#h:Y5Qd2gb]1if%r_x|U598`' );
define( 'SECURE_AUTH_SALT', 'u3B/V#]B<a/kK-8Smet{z%nbw9LjO =;asMo_ZcZO(|}DkLlK[mAn`mi6H7687Ie' );
define( 'LOGGED_IN_SALT',   '4%RusSZc-Qj-W<<&MvWsc&XcWUTUrC8s#c&-t(+N37}xEGl iMPE*<rXwU|D&b5i' );
define( 'NONCE_SALT',       'dc)k>>C]4aW6l%Z?OSa|VLRcN{iKt?+H|<2HSBB@O50qfHUz`ThDk9H{^?u-UI9u' );

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
