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
define( 'DB_NAME', 'wscd11' );

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
define( 'AUTH_KEY',         'i69pIBiyMa,j?aRH)P,f#+WDUTNZn%qpaL_5H4+.oCsmlb2~( WA6~r QQEN|(#4' );
define( 'SECURE_AUTH_KEY',  'Gj%OZ^X+~0];XV(y@@#XcXr/nlr]+>!kHj1rWiY.1p/:TG[(3a~cs@@)o)`tx_|b' );
define( 'LOGGED_IN_KEY',    'Ru>`<Tz9O@|cj+v$hF:H78DvNzz]fPCOFM5,ggK^EM!1Z/MLSF0NTy-NjZXp^H1F' );
define( 'NONCE_KEY',        '~QQUxD`5>=o76oby01mEpri(0rmE4?|i2p@oSaz5/0%I~5ez%s2g3#i&,{QyH8M)' );
define( 'AUTH_SALT',        'qc!uMX}rnTg:_D<x!<lPj`D[f=USt4o]d(I8a3[ly?#{vK&e17CN=K5aAJZavLs>' );
define( 'SECURE_AUTH_SALT', '|z0:]A)+ v=tHOoaY@(tbx7LeIAo;N/<jkcRu#k#Pb *0o&*g(jku-!]O50Gqz^_' );
define( 'LOGGED_IN_SALT',   '(FCyHCvYT,(t[QfnuZ x;PraSb{a3z,g2T%/:RS-=2SrcOl~y?C3Ge!bX3Q#<zU0' );
define( 'NONCE_SALT',       'd`;sGArt^~LOO}<EUimx9qPJB2E:kl|@g5J`lh[=W4*d15SNF6^!O=:8?VRCrRrR' );

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
