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
define( 'DB_NAME', 'zazalmaza_db' );

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
define( 'AUTH_KEY',         'wxi99x;I@jo[,Xy;=LuyHk#idYb!?3Cs(.?0ku}dDQ0CBI<b.F_ib+0`/-X)LP_%' );
define( 'SECURE_AUTH_KEY',  '%5Gv<:thuQH~K{2~[4CBA@KRXatL7r($:{S&0y9$Wonnb!k~V.$Ct?Q}E7+#ms-j' );
define( 'LOGGED_IN_KEY',    'k3O3@`DXBHg<z)da~mlwQ2EV(`tb_O-Oo[x=Pv@-*jpl?l;$n c#dZ{;>(D|(?Yc' );
define( 'NONCE_KEY',        'z)5%W]II=uicKN9{WCOlf>]YDYjHv=gP#?`!SM?@PG-(xf)qYu7{K;O)uwg#UVuZ' );
define( 'AUTH_SALT',        'Mn-Les1mbPa$ZQ*-] lD8a9~^865hY/}g4p^m,f[C-bisgQe*|8VAlnB%i% $qsX' );
define( 'SECURE_AUTH_SALT', 'BgtZ/<,F#%I8,^J#+8K9bNk4r 08da*tizzXj)Q?6IIIrjSifC#15jiBsn6zX[56' );
define( 'LOGGED_IN_SALT',   'oRf,Qiwx9R=I/WBa2Khx/v^LQ6;CsVgLH8[pGIk!Xn4-^ dN~]V-~JK7Ud:~`.dP' );
define( 'NONCE_SALT',       'BLm+;BgA) &i_TY.(!3]Np[lF2_v;.S%i{+`%<Ysl!5DNd)k|Fm8C^!2eBV#i5.4' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
