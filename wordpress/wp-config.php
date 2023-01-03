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

define( 'DB_USER', 'wordpress' );


/** Database password */

define( 'DB_PASSWORD', 'wordpress' );


/** Database hostname */

define( 'DB_HOST', 'db:3306' );


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

define( 'AUTH_KEY',         '52RzP]%4!4GL3~#&iNOVuo<_Xq[02u*L]EowQo~3@}lR1t+vR#mbki@~!5Y4DC2/' );

define( 'SECURE_AUTH_KEY',  'oU >R@JOr;51f(]UJ!9zYfs-r/V0/,9{|N}/qgPi09M-{`2[wUyS,qkD 0E5)x^|' );

define( 'LOGGED_IN_KEY',    'iQ{JkI#On|ciq YhU^$ti!l~w;;ZgPmTxeDM:ICB52(9Tr;p`U-]G5z[m|N~X0RW' );

define( 'NONCE_KEY',        'Qu+R)`w;P3z4WST!>svyH~&3n<7X$YqE<k{}z`X+Gk;S0r1G$U-iSG!tbR,Oo,' );

define( 'AUTH_SALT',        'lN!uy0~;8)~C&zbOHHssBcW{>#) Aa R9kPK=7t+vzhK4~u{g0eR4B4TV7G`QLl6' );

define( 'SECURE_AUTH_SALT', '-WO{:<4gLW>n::Sre@`:Q+xA_GvpF|L>pVbj9jvU(BV?R.>lMSW<pMIGT~Xrm`!}' );

define( 'LOGGED_IN_SALT',   'R!}ok~<Igf:}Xq-ks&<HA}>Cor4y7RN:HMgwm&oId Rs5X(/1)fNhgsyvrL~+W,g' );

define( 'NONCE_SALT',       'F)$7,Diy!,AcHBNcKF6)?e}Yb_%37^jSGi6XyuyxM2A>CL9i{} PoJTlTo,$]AJ5' );


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




define( 'FS_METHOD', 'direct' );
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
 */
if ( defined( 'WP_CLI' ) ) {
	$_SERVER['HTTP_HOST'] = '127.0.0.1';
}

define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

/**
 * Disable pingback.ping xmlrpc method to prevent WordPress from participating in DDoS attacks
 * More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/
 */
if ( !defined( 'WP_CLI' ) ) {
	// remove x-pingback HTTP header
	add_filter("wp_headers", function($headers) {
		unset($headers["X-Pingback"]);
		return $headers;
	});
	// disable pingbacks
	add_filter( "xmlrpc_methods", function( $methods ) {
		unset( $methods["pingback.ping"] );
		return $methods;
	});
}
