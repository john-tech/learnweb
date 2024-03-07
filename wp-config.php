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
define( 'DB_NAME', 'learnweb' );

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
define( 'AUTH_KEY',         'uK&|3k/A06Ndj_Q~Mv%m%eZ,^S|m!9*P?ieW3Y<<gcgM45]tX[oHP9oG$qu|(TK*' );
define( 'SECURE_AUTH_KEY',  'B_rpE59@,:r2tID%Z}Mbwqfvkd(!m!&p;HnAdp{+&7__%@zCP8I>mSs!g(B~OiJm' );
define( 'LOGGED_IN_KEY',    ',VB`?(-=liU[5^#xuO}Iazz}Ct~Z)PfUm17u,%>Fo6d@?{1CdFINLhJ0<i_Bh^L]' );
define( 'NONCE_KEY',        'w_^YfF|w}s#<HOBBXKPk;Qb_3vE[6h}llb[;v,UpQ;(fHjgEjzQpV}CJXvOn]j83' );
define( 'AUTH_SALT',        'b~x9!tYQ*XOB+ t;K.-HmGBt4^!Az8Qn(-T-fiFPH18d,ma,C_1]Py(agTg:kG.u' );
define( 'SECURE_AUTH_SALT', '-2kQL>tf?pktf{T%C@9r{pnlSw?0We%X6)U$D3uBU0HS^mG,uNSd1BH4M2ne<{>*' );
define( 'LOGGED_IN_SALT',   '@BMpJ|vXl|LeKdIdSGIxyixm=_[|[$?s>umc>gp&#?rkC9sEm7c&ImL67y_5T1AK' );
define( 'NONCE_SALT',       '98o?m Z2USJo=R2}r|.!#l75+~4Sy=[q-u cf>kbDp@^t5-O8Y6]s}t7ZLt>B1:F' );

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
