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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '-cZa`k rfv<MgCYv7tCYyOxl?p2>A)~x,N+N;]ZK3jZCXt;x.NyF>4#~^tzrCdfA' );
define( 'SECURE_AUTH_KEY',  '#4Zv}*(Tj.T-pAJZ6SjB_-O7,v=$2Qz`%z!_$Un6u9RTD@a`]Q]7JKs[)3fG_>xY' );
define( 'LOGGED_IN_KEY',    'GBEI7gUe{>$4R~*#Bk0RnAtQ gCy5SSDpY9ot.{W~rBoi/cmT88FP:6H&dIWY`v:' );
define( 'NONCE_KEY',        '7:]VJx*=Lo=JFMp.6*JK.WJt2C,4#g3<}q)y-in)4WM##32I[X i:mHh/=*PR?g@' );
define( 'AUTH_SALT',        '[Y%Y%FcQ C1PU}h%:(`5/g n4veX24_M>>6)ZQ|~1qX~3zfeO37dBZy[TOe&pyt2' );
define( 'SECURE_AUTH_SALT', 'h02Wqu+GOj eBg!TS5nFWj[3p!k{f?q2Qup3a2QM,]IAd!x,*7laqJ~F? a26kM!' );
define( 'LOGGED_IN_SALT',   ']CE%)WuN;fn^xeU;zQDOFJ+15^r`puhdxCC3f?m-^$l]d;2*{(cB}z=U68!=8%Y9' );
define( 'NONCE_SALT',       'CSm/Po|1h(&+zwlU?95Uzw&}X`k?pVwkMP3Sr(K<4rEcl$zFo/}yr}JrgOL*yz`;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nbp_';

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
