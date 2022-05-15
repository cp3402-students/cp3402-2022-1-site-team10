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
define( 'DB_NAME', 'townsvilleJazzClub' );

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
define( 'AUTH_KEY',         'qfs_sT#Opf{k#]}t7e7o!+?$IccA2^9Rwz#uG[>gy3S;JeTs oSAM.gH5FHwg+3A' );
define( 'SECURE_AUTH_KEY',  'Z5/:<JRF,d8_DRneg?)~H.w~`^7~GXqMr(7?^<ct>Q)8@mK:n[e@4aP@1{&6A[pX' );
define( 'LOGGED_IN_KEY',    'c{O5fH0hu<m+~TDL*Q/*}oI+v:RRCHq6DdQ;?VW] vyhUfE.M%QK[^v<&w5zmHHi' );
define( 'NONCE_KEY',        'l=Rx-=FdT4wf)Sox)RHA4np_6el*G([}D8_+@+n)hVJ;Ic!-9AVr@ z7pSm}0_d,' );
define( 'AUTH_SALT',        '1f&|A$zwW_>(,R~l>O=^[D)IOKt}tKH|{QX0)Z2~H1, +PLPjn1SLk) :z2Aw~[j' );
define( 'SECURE_AUTH_SALT', 'b)Iu6%AnGX@pwO^!B8K >o$1v~YXjnB_%RU8REw$ 3a`e?v_0|0_dL:-jEP;[$w@' );
define( 'LOGGED_IN_SALT',   'j8mAA$?.}lChP%,lT&lj40_$gL0]%XH]_J>7XHo^(nob2du(BeOO*Ha+q$MEhl#&' );
define( 'NONCE_SALT',       '121(t8VgO#x8c2>Al<osZ|NI&r}_ixF{x=fi6.{C2=JfR`9!T/eb5~i3Yt))P[]t' );

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
