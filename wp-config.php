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
define( 'DB_NAME', 'first_wordpress' );

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
define( 'AUTH_KEY',         'qcZWu@fA1emr4k%Ptx<$N?]Aa{[r+3$(l?#sq$$4?s-XvfR`|enRmYv@=kn|fh|g' );
define( 'SECURE_AUTH_KEY',  'Hs/^,Br7-+m@D?;l$DYiysi^D!YK9So8%eA6xOZZMTvz[R::=l/obka/1/X0Dt+u' );
define( 'LOGGED_IN_KEY',    '@b-TFJ+b$L$>BTAw?eQ#N~-<d:Z/, t+^BY[_jrd-R}s*F?7:-2OlOL@lPvr|.;Q' );
define( 'NONCE_KEY',        'boOn15sk=9>rT%J;M#:tZhf7.CXP`:u=aqF}?gQi-a)S6[t%63,w{Qk=(LMzJrfH' );
define( 'AUTH_SALT',        'R{#qUHvfVrvg4H>!k#[1;@?$PydFySQ!*g/l+boU]yU,}Sow-}E+M4-1/|TsaK,Z' );
define( 'SECURE_AUTH_SALT', 'IRQIQ!Ad7GU%<wGz(-SI}`?^CNb![ugN-hdF ^;qG/G*|c+:`j9`_R%jPl1t4?tn' );
define( 'LOGGED_IN_SALT',   ';F/f]:Wv;6nH242{k{ux}D!lL&o8zs)&4/rL]4uCuaYG/zTULT;G[#o,ERk^?z]G' );
define( 'NONCE_SALT',       'oXt`mUh-i&dp}B~72KX+zFogu,%`Fp2em_o-~98L|9|<6Ib:4>/*dH8;gKi|W $L' );

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
