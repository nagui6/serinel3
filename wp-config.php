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
define( 'DB_NAME', 'taalimi' );

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
define( 'AUTH_KEY',         'S#M4EP6h,:+LcdnbCb_7ije%NZki3[v]S/>Cx(!Tkcg`U^gRAU+-Zk7+aaNX1GS_' );
define( 'SECURE_AUTH_KEY',  ')]j8wor?oRM&Jh~!amj1kfAH:g6<)h5jLn~B4M=h)R=!DLp+**Ybe1b#xi9cm=J{' );
define( 'LOGGED_IN_KEY',    'OwCt3rWG$w1P)RY61/Z{;<d/An-iN1Z ,/]QIq9~!s@ eqdc&<NKxV4=(j)lk!%A' );
define( 'NONCE_KEY',        'GSU(T^e(E-bIt23|E^<Z|L`rynzs,{.I~&[j87*0/j`MgiefkS7LGtux2vV5y]Ts' );
define( 'AUTH_SALT',        '8@$Yg`Jchf@r H;uhu?%s&Kumuy/&D=O`{$.L+}!g-*xB|=Eq[;8kKn,>JBw$Ufu' );
define( 'SECURE_AUTH_SALT', 'Qt}JUo|_c!b_;L1z6&;Gu[x>.(5*MsLz%Oe-A>rly9uoFqTg{k_E~zb_rLL4U]T?' );
define( 'LOGGED_IN_SALT',   '%.BPf.dV3gNFuF8y(M$rUnTh_%@_bW4K!=u(alS:+J?md&#T]>!Q.plA)[L#).z ' );
define( 'NONCE_SALT',       's:](8d2Abau<54g)t#[&vc;#NjWh(xAi%4x60<nG99S=kY+m,u}mZbP5/>!d[q4I' );

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
