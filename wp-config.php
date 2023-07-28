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
define( 'DB_NAME', 'proyecto_personal' );

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
define( 'AUTH_KEY',         '^# w;R`@i~ 6_e-hV[KJt/LBJ6LyqeKn/@4Y//J4#=X~wKK.(Z!8^7po6SV5oD*Q' );
define( 'SECURE_AUTH_KEY',  'p&;Tsh.i{v8K}]U8p@s1E=,Cv_}Nmhuss[Ik8{qp`PN{$uI(6=`+4LA}^/aU^tlW' );
define( 'LOGGED_IN_KEY',    'f3/IAw|tv%$I{$TXwC<<u;q-4FkVqG=:]Q4U8vId&1T)V|rP#+Z~l,(qH.v5CYh4' );
define( 'NONCE_KEY',        '+=#zr1),~PM&5Skt_t_&Dc_F4Q1EZ^oC1t%geNjbtIgT~x$PMWWc=]c!TbElLp.f' );
define( 'AUTH_SALT',        '<_BwNwS:eredW&>DV,S5Fh{|(&VP94?g-Q`:+-#gGqXc7_9-O8Sb?:}l6m_!gTwW' );
define( 'SECURE_AUTH_SALT', 'sk3yT5d8VCkfVPg]pl8u7=@p8cd9jxp<}{j1.>`]!~/6966qswAoHZD*3$`8=`%6' );
define( 'LOGGED_IN_SALT',   ',T@-Lf{}G_UZ(!{|yeU+< }8zN.eIk )Q =YEVs^lIeL!gu(iheJdHE#PErnxHH,' );
define( 'NONCE_SALT',       'Nkq}>G@pcLr=aN*F FAtrSd]7>o;1skb]xFSBP./aWI^#!H>K]^2~6m,r.4H=],Y' );

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
