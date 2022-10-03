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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nutriplex' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'q^7*TD<B=puxT!#DM{xI{!)BbWD#O:<8/.vGpfW7DHn$<Dn]{~[L/!3|7H5J&-E*' );
define( 'SECURE_AUTH_KEY',  '!la{E:*:ndm*rb=Km|<bObB|)gUzZKH:GLUW]lI$ddsR(%dw8*P6#= $!Rr_0Xi/' );
define( 'LOGGED_IN_KEY',    '1G:>^<2CHgY%L)Q$p(hPMm>@OH|-Um/jK24abPP{||i*W%=&0!-n+<bZrxS:b8P:' );
define( 'NONCE_KEY',        'iw/td {YM@#LG8x2FDKa4W]{Wu+m(7+SZbw8IqdF3:4`K*p9eWP5o5iq_R6L<MAw' );
define( 'AUTH_SALT',        '%HC$zb?m.4iSv&&H~o1[qGAnVLv1<7%R<H4/sJFWY>c|W*?%}30vg 3=q$%@dy1m' );
define( 'SECURE_AUTH_SALT', 'VF>PqL4BzvId]om$$+V<<FBi!k`0M^I|rV#8/tlw$ t+#r0U`IAG`^j%R1pCEH.^' );
define( 'LOGGED_IN_SALT',   'S}+|}H$ B9,UbU0P;33{3L@lx| qp(=K-|6KD(ZR!wOF*!6N3/K`43PeG r`r:&&' );
define( 'NONCE_SALT',       '>U=INUFVj2k#JG{.i_qH:}8[al>JARzwcZ3N!J^EQ}FxN7Fa^EabGiJ+A`J%[LX,' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
