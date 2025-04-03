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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'P)rcty,Dn8&]]NHei>|m.ZP:_ImVddK&wl?4X!1nwq</({~R*Ko//#f`MJwnJRdN' );
define( 'SECURE_AUTH_KEY',   '6eb/(QwO>]+p#T>/GNj=HGhhtiSiE&-6yrdrC@qx7VWc7K>1Ij&>;q9t6[DEt--!' );
define( 'LOGGED_IN_KEY',     '[cubVz-J.+/Tjqj(I5?WMIcR*0k~mnlw$xQ{FW+Z+p][)j-ahfPfl9[<LTpDd_ei' );
define( 'NONCE_KEY',         'vLiCt%Hq&BmH&c;G1;N4YZ&_gUw3Qswltt!DZwqs50kaZ{}2WG!YR{a40%.KXtJ ' );
define( 'AUTH_SALT',         'uok9LA+1ar8 |@G@453?:q.OzF!/Ljy$A+#TYTvCU$(~,OI2F^wUj^2:=D?}Hz{X' );
define( 'SECURE_AUTH_SALT',  'Gc/rrQj$P#TD@@|WAn=~4Y:A{&LN2Rk.{+O]&U#8j~| )mGffmBN%|}yg,83o5P/' );
define( 'LOGGED_IN_SALT',    'aquziH^%0Y?D8(hP.nZnYWX->7oQux|I_Ual6y.D!Ku$D2,g}vvG|EG=d`1JxXgy' );
define( 'NONCE_SALT',        '(BlNuw:5/NVwc2L5>8Dk4EE]YCx.Rxl@2wcL.7e~piI3eo/@%TyQm%W*}w v*nO9' );
define( 'WP_CACHE_KEY_SALT', '/lTDyD68F(cbz&[q6PsZ$`?lyuI1^I9Zy;U>9u~+n9lL+%O@L2`$j-tLC37^R9Wf' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
