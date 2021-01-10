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
define( 'DB_NAME', 'blog_programacion' );

/** MySQL database username */
define( 'DB_USER', 'mzayas' );

/** MySQL database password */
define( 'DB_PASSWORD', 'se8qlcwh' );

/** MySQL hostname */
define( 'DB_HOST', '52.70.17.30' );

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
define( 'AUTH_KEY',         '=ncK<h<I?A|QTX$Hf;%+?Ys|84Ykh]!JH$Avq@!-{.<PkZ~q-Dnb.mYAGajW:S@J' );
define( 'SECURE_AUTH_KEY',  'U^D2qsNt_^Pb;DVS*fw?/HZ9WLwqTS*Q>dJ}zXo?58`-IBVvCKN8 JL~5d=rhRz^' );
define( 'LOGGED_IN_KEY',    '5FaQ2uV>oOJMcd-n$u:Z>#J=k,@I/G1h1*Z{to!E9)F*o_n(PiwV}o?Cs7D>}Pd3' );
define( 'NONCE_KEY',        'Xd$XcG|^)n!:gn/Rr!]e-V}3(Eu`7,a)*cx2awtLiR=#eW43 +2gs+}LwW0vbqXD' );
define( 'AUTH_SALT',        '|)o0Mn>OvLM$3XT@Hb7~M!|./ZWd[/ZvdWFA|YP#xZRE?jwlK2s,6LF+W&w`g).U' );
define( 'SECURE_AUTH_SALT', '$|X57=ww!+QH-BG-xCM5:]3;!b gK~tw/,EoXC{^u}P9->3Ys|D$t-t>F)H: Av0' );
define( 'LOGGED_IN_SALT',   'rf3OPS> Z%5TXJFM4>p<FEQ/Aa45oqVm-8b_Z{s!x=uYMOz&Xcd2`y+% &rV!XCY' );
define( 'NONCE_SALT',       '$<i<Jvgq7l}z[S/<yCs=<Gt*}Xj>zqBo?%fWoaCfkBlC44X~2pLj>VA[Jma!y,Ur' );

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