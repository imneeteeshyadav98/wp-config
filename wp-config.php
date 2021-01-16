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
define( 'DB_NAME', 'mydb' );

/** MySQL database username */
define( 'DB_USER', 'neetesh' );

/** MySQL database password */
define( 'DB_PASSWORD', 'shaluyadav' );

/** MySQL hostname */
define( 'DB_HOST', 'wordpress1.c2jnkeybqnro.ap-south-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '975@yjTJO]rJ/iAl&BqzOCJVxw`MQz{D4m&7{ENp!|]Q(x)x~*}!Hz[i},/w|Tki' );
define( 'SECURE_AUTH_KEY',  'a-U39E1Mj6T%=9P(/o?J7i}tfj|[R71> -@4Ytz:]>Z@s{AhO99w@MbVXe<JL:Pb' );
define( 'LOGGED_IN_KEY',    'mX9M25`L4gA5y[Zl)gtx!/k7D`JN@0$d&!]c{X %$.$VC.;)h,_U#^Kz>Hjj(2uC' );
define( 'NONCE_KEY',        'gU4c/1}cf~tN?zCz9g.FbK(P%w<N^z3I|6K>/LZCfLzCL&]/vJFQJz2Ymh&w39%:' );
define( 'AUTH_SALT',        'o$hcDj@mrB27o%kg(_Ecrc$CI9~6sB).dDRZcdKG)gD+jZ]I:l%_}IFXm#.W?%!(' );
define( 'SECURE_AUTH_SALT', '!Q$/D)UX@Q1[K9u]SW(`/ms)jZ!W2N]Gqem>N`yeaX)|5P}oNrLDQ^f=3TscALmO' );
define( 'LOGGED_IN_SALT',   'K-F~MzcAW^08uKUif$^*,BG(/=%T 1.c8TUAd2$01l 00i:qSTF-|BkqHymA(Uw@' );
define( 'NONCE_SALT',       '7ehnmMyqiJ!RtsZSjvRHS+AfW!R&3KX%5d[E}Z<=d;V>ZVAOd^4,:BJ+jJ*Rh1q!' );

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

