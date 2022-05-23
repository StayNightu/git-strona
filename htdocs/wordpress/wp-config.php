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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ')/D!zI6T+vCP0D_@_PblUgEtd]AE:wqt2>hjQm, T)J[|;g}56fe9NZ*[=4u<91 ' );
define( 'SECURE_AUTH_KEY',  '$ungLp.nZ}3:Lh42&qd1aGP8HhOplIe_^)-SD~&cVJZUY#&m*HVQ6aWROLj[n41Q' );
define( 'LOGGED_IN_KEY',    '5+93Rk9yTJ$}ML/PBZlXD%.I= ~h[Ch<,&xlekx4YfCVG!BM@7VQK@u44(3,.<R3' );
define( 'NONCE_KEY',        'VY`Sb%WnZkM&kJTLkH-rGSZW/aJ>RU@qG/7R+p.QK0%v$v?tPc{h7$lVspO%[Mgc' );
define( 'AUTH_SALT',        'BA_L&+(@%* zK4=Zn]@66s)Qu2tx&6v?lMSc^3]zQ741|X8U,jpp{NAcH:0KRM>u' );
define( 'SECURE_AUTH_SALT', 'Z! ]u49bd%m$sMbG=xq8HfNlfol]IV#&CbaNIynk[oA,k<=J5nd+]m.pf^x+K/aS' );
define( 'LOGGED_IN_SALT',   'dAqA:=DPnbP,.$~l%mh;CNpfadsIRA/7^3Ja&/][|Ky-{yV$Q(kLn%g$P:0*YRof' );
define( 'NONCE_SALT',       'Z|[Iw~4B!{5VuczQpOV )kakGz8k=0-hY6oW[k~H_~e-(zKtB&~@VDIZ2lXm]ltf' );

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
