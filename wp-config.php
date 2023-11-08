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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newwsad' );

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
define( 'AUTH_KEY',         'Ro%Qi^*(/i17|O+J3etJt#8uO9 OZj?_7tet&RtBz&z.{560XUoW>iV7.ZVCF6;E' );
define( 'SECURE_AUTH_KEY',  'R]7[Mh}b?E:{!% 6ZL0RCtRBoTe_)[-;|*GHsQKca6{ZNfY2sq;u8_L8vfN9Be7r' );
define( 'LOGGED_IN_KEY',    'B)^U8iF5-5[6Q`;Dv42rP[{9RxX8sdz<Ac0Fnr}0 b2`^[ep7*t^/q`1NAl&DkFA' );
define( 'NONCE_KEY',        'nc#Gn&OmMN c~M2V.GjEw85&6&g(F7c14XX:=nQ4_O2l_8agn.|{SARJ_z3QJ}er' );
define( 'AUTH_SALT',        '@]L0[<!=htKV>SHhLl$TkK.qCs`8{^jcVi2;FX0,M+{uNPifqXJr+|7E:emcJ@lI' );
define( 'SECURE_AUTH_SALT', ';j|E#ibS5RXh}9^&^@WGs@ED%]1%D!g(FP?Q2=oG2NnaNUsTirG<jEJy3u#+~WCt' );
define( 'LOGGED_IN_SALT',   '#HYv5g]Qh{J_2X_iQ~33Y}(hrF/6fm*u|W|+5z=mI@m7Kr-)QFEb {8(X@%Ey?3Z' );
define( 'NONCE_SALT',       ' P:Vp@R}bz@oAE]_} OT__1JCP6PeW8hs7N2wY<A c4K*IB*zny*r=|?VoOB:=!k' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
