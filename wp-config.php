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
define( 'DB_NAME', 'wordpress_site' );

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
define( 'AUTH_KEY',         'vxQTL/X@G`XS|(4n4E$#MV%S/dwJCD$=xfkw.Mw&{H0!p)l]OX)$C@@PL<|1i tT' );
define( 'SECURE_AUTH_KEY',  'Z?]O&oRzZUYlqd|qzHJL/|(.~W**SI=D]4U,0AK~=c]4VLr$&,?xkVoR@yT32F)U' );
define( 'LOGGED_IN_KEY',    ' v+s|cXtCQiBWv|vJ3N;*J=%G[5)*K5sj*B#qS7LvHXX+]{f9L;]dUG#7o9v`vXa' );
define( 'NONCE_KEY',        'oAf>Mp>dY(CJ?G+MO>tvg&qs=.6QP%)}t:8)UN5)| )?QRW}!B?mm<|^f&hpikU{' );
define( 'AUTH_SALT',        '3)w{h:>ZB-;&wK{<6xgUCfjeam=b=uE&4K{DJVAJ66@;%b#kjFf#0DWc*8Ju2(5y' );
define( 'SECURE_AUTH_SALT', '`5<bH:N%_Qeu+Kw4mrO]dBHw5prj3HV?kf(j!8}X,.A#tCo0^FG``wMH): {L}1o' );
define( 'LOGGED_IN_SALT',   'Cl*(hCXA(:)L#[PF]dA(vN Md}d-njzO* C>N!q9-1L-[Y}?.}z79D8ny3ud W:%' );
define( 'NONCE_SALT',       '5-zK77=*45SdZ8^Y$cs8Faai|}s2<[Ax7U<;`vEOxjXx3K.!4rg%i-`{$Q.p[U;!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_testsite';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
