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
define( 'DB_NAME', 'Restaurant' );

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
define( 'AUTH_KEY',         'm.VcBkM@f{$nMCgps8WQpAk[N]CRCFw,^~W4|3tb,ZS1u-Vaa[1yCS;u+t9}i#B;' );
define( 'SECURE_AUTH_KEY',  'y2d2=TN#.-Yo&k$4_5L54wusjB]x+H^9u$7z~G5TUy3?tFt*>zKdIfvKD%!bi*i@' );
define( 'LOGGED_IN_KEY',    'BW`0h[yA_&Z7f{Sc]~p!<iHN,LN4<9@^,jSdvi:8*<}.IgCw.4+khL~U#XC6yd3g' );
define( 'NONCE_KEY',        'caNxrQT%N~#ROcA/| ~#^_vZk`?<J$_pEd+(>g|wYFW`$bb8GUyX}Rjb8Iwv1Lid' );
define( 'AUTH_SALT',        '#M-EV9c#7rF`0G&Z9PXAEJh~C}lpb?Fn?Q=yPL4]E4qe|;#c2eD[-BH`>Ekc=t~y' );
define( 'SECURE_AUTH_SALT', '^$xL{c}K)!Ql<B*{J9bV&l)RX[vA+uvt`SjUu3qasA[r{429k7YO+CmsR$t$iLd+' );
define( 'LOGGED_IN_SALT',   '}O^2rfJSp*Q(=;}|fTSmWMyY)LOVom!W}cfLTL~Lmr|_=9(L,w-mchZ{LZ:CzEg3' );
define( 'NONCE_SALT',       'YiSg-P1YtP({Y25;vOx=0yTjg~r~nvH=6n#~:MiUnGSB$m|QR;NK26tgS^apK~b(' );

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
