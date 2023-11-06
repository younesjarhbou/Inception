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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'inception' );

/** Database username */
define( 'DB_USER', 'youness' );

/** Database password */
define( 'DB_PASSWORD', '1337@1' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '{(!U22b7=rFM</-;F]3R[#,RiC}0M9:>lQ;}QI*iBpaSO(Em:H^R)Wg/LE28({)y' );
define( 'SECURE_AUTH_KEY',   '!BJI&b-Ov`vW~]39 I3VW_27KkbyZqCY0d:(4sSFt#Tc:sg3+i/.vV}mqU-9SNUQ' );
define( 'LOGGED_IN_KEY',     'Vy-t6XfhEGq 3EGM9eD1J5ri`8Jwl<WZ=&@46!qe5-c}:(OJHo7T!;*&k0}Aw@sK' );
define( 'NONCE_KEY',         '/;W(ru<y()nfgYP42)ZZ=3h%.{=t=I$0u}7q?`gUp<5`t=u+X|!^1M( @l}a$/r{' );
define( 'AUTH_SALT',         '#%@QxN^)h,0vb(ncu22xcTxZ(~?Ve-]@7pD9UY$)UV7-/o-TGDVoC}![mIflL>Z6' );
define( 'SECURE_AUTH_SALT',  'fVE.Fi{]z34^LRi}Ml@[C-zp,8:P@Y}iEyS<JVY<eC,S+2 lxa_l];b8gfguB2R,' );
define( 'LOGGED_IN_SALT',    '?>ue3cY)Msx7EW&BR#T_Kqz*Ye]C5f8QBj--:qUr|Auj`iq|;&ynBh2wP{J1by*o' );
define( 'NONCE_SALT',        'PghC{VrZs8;1vv^$)  A/[yMP^3]#^=g]C(bN{Pv3aFfq4Z%R8W5-Cu(+t%/OKlo' );
define( 'WP_CACHE_KEY_SALT', '3[jr/B7<)$!yWvR]b]QPvcw>tK.,,~Rv~5DMn4##MOWlk&j+UQw?% .Kn_pM]<Ki' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
