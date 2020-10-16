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
define( 'DB_NAME', 'woocomdb' );

/** MySQL database username */
define( 'DB_USER', 'iskander' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zomd1234' );

/** MySQL hostname */
define( 'DB_HOST', 'woocomsite.local' );

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
define( 'AUTH_KEY',         'N0{4iV)OgOwQ/HvC1DU&V$=_@`G|R-q%:v(3{:%?jocnfJ9u;E+8UWlNG<wV~|Ep' );
define( 'SECURE_AUTH_KEY',  'IoBu1MeI7A[d4N3;H(E b+ kxPuG8D}6;6Kwo|{ =R`5&oSw(0CLRn>&^S+i@84<' );
define( 'LOGGED_IN_KEY',    '%A&,TgXKH}[[H7$|YdGxv]`zv4xKiQ}oQbJCf*a]^WSR#Yi]o9g8@K%wndIM6XO_' );
define( 'NONCE_KEY',        '*^/oFFlWw*o@%Pp7b)=o7OZj&`dtOI#B&t7){OHla~%fh`ek=31%fR{31$J)C44n' );
define( 'AUTH_SALT',        'AZ}MHFNU(i6~d`JF(T}*2+V+x;zbb$k;FT]f@i$U#@XEC+U+;&hqz^Ebi_q;[:lG' );
define( 'SECURE_AUTH_SALT', '#Law$a0/tu,j66QJ|cpv=$_]GNewPT|a>Do2}hr@rN<o`MB0ziuIJ@>p8ca?-FDk' );
define( 'LOGGED_IN_SALT',   '=0*cou*;I%aK:/6TQd|&9hxf6BX]Q1pdU]!|TmMS7-i3E!z<wXb4=6Q-Skh)0Ohx' );
define( 'NONCE_SALT',       '+U6+3g&Zf/$Vl%C:`tr5xE2c%l}VAk1Mi/^PSyc06,PY|7pQ,8dU.MHj.kyQgsL]' );

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
