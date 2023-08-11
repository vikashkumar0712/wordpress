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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'MRVik@sh07' );

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
define( 'AUTH_KEY',         'T8vK]@Vc!wr._5}GxgmKc+RcHLIq&ICmCYwx?p8~O(L.w ]EacKJfN^/m>*Qn$y1' );
define( 'SECURE_AUTH_KEY',  '4PMO{%;rmlLX6+7U3?Mb)ZX:k&(>^Zsm98ZQXQIb> ?l=HZ2n59]@tw4U_]/,,U]' );
define( 'LOGGED_IN_KEY',    'fTx`j83rylHo}DB2,)uB$dThL|*IT}^&S3f9XRH_pv9FRp#<3fw<4w^gvsOA<_`k' );
define( 'NONCE_KEY',        'Qlc3P}$zUJM[%O[{4>Nf-6Bnn9H+TqG=r]2[1Toct@Gmfr-}~2rn)%AH?cUKVyKb' );
define( 'AUTH_SALT',        'j|h;GrEz 3~iQ,n/ZTOnnEc/$;,KSwyknPX=*xo.--f>r<~8lezT8o^w*M+..I_n' );
define( 'SECURE_AUTH_SALT', '#9@G/^++2j.~RV7<BZ4z50/StvUodH)e9>?8YF@mkt9]n*ehf)o~/y|goFm2goAX' );
define( 'LOGGED_IN_SALT',   '9(C$cg1UIUhOn A]=zlwMN(kPykSl8y[lB.`-.$O+NXq+RqC2#ag&wTMp>R+ZT6P' );
define( 'NONCE_SALT',       '};mNwp/{^tHnge!&QZ:t[&rtTZazq<(;8wN64% Gj(Lr^e.7j? Wq-@ rFg#j7vM' );

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
