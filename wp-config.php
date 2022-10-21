i<?php
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
define( 'DB_NAME', 'manishawprdb' );

/** Database username */
define( 'DB_USER', 'manisha' );

/** Database password */
define( 'DB_PASSWORD', 'Manisha1234' );

/** Database hostname */
define( 'DB_HOST', 'manishawprdb.cnbwakbdzeez.us-east-2.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '|e%W5wWW9h&6k<op[X 0Z6V=JDcJ f$zb2NA$i_rjZ6{om2LTAr!D,XCdH0<s}u5' );
define( 'SECURE_AUTH_KEY',  '2pP&|OEiJi2j$%5/]P/u6)!n&NV@%_HQq9!81cjQdu,/4H0(#;|j[~YnDyzvT5D4' );
define( 'LOGGED_IN_KEY',    'gUZ >gKu=%1P|+e|,:P),?8h2juV~y8X6`kzz1%*USc1+8XOnBXW}sV>]A^h%jq;' );
define( 'NONCE_KEY',        '`B&w|d|K;cDQ}|#r/c1b85qb,@+XN--8-IN!nq6^Z zb0(Os.U*@P_|)7vc.g%(J' );
define( 'AUTH_SALT',        '4.-HPF/wu^DHSUNI#)59&Q>zgQjtd+hslEY[*mJ+8B3lEsl*hr4::L.GvD4,Ck!n' );
define( 'SECURE_AUTH_SALT', 'KkyO`VE<lE07yjU|;e_t}z5DHQaoG(19<dBL9[&w<1~v%|nw9_SXC16Y]{@qlSi8' );
define( 'LOGGED_IN_SALT',   '.5mln(tWWtL/+-m6a;tL//w%ZCcWA]BSjCys}sG`NMA-%C$~?ts~i9<OJdp[I@-,' );
define( 'NONCE_SALT',       'f9P:AAb.OQJ^&.8,$x_LZvg2%*hRct+d.HX}}<Y&3R[)8XxIS6WTO:oEmYEeE^5C' );

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
