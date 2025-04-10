<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dev_db' );

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
define( 'AUTH_KEY',         'c~74c@}Rlq9x5c:3!t16zm$C>loVuD9~kk#:GX2_~CnWWs|Bv*#TSjA;JxN%8[;{' );
define( 'SECURE_AUTH_KEY',  'Q&l>eR]8fz_h+,0_7!d<8[,FRv;+ #_6e%~MXt@tzl=2@&F|NxS<o7f_Fr`jm+xy' );
define( 'LOGGED_IN_KEY',    'IDg^.$p~Us|p1.=r*t|plL4]urVM$4o&HPSCCmbVRS2~T)ixWb,VP9&h/*PRb*Y(' );
define( 'NONCE_KEY',        '}S,FDL?tHU!CM~cQ@-S>>zAam(vPB,:l9F3YW/l8~$Gnc*S2*Y2fY:&Y-7&^x)j|' );
define( 'AUTH_SALT',        '7Vr.8uzX 7z~wLN!Gp&L{ntN*oAD^UBxfxM:{[-#r_H+:)$!9y|gVc?_hOFGxsv/' );
define( 'SECURE_AUTH_SALT', 'g%f^fO:k%aEZiD-fX2(u2l3[+{^SNf{sS:+02;L3/} PRaAd@MGV`R6> ,x_RZp[' );
define( 'LOGGED_IN_SALT',   '2{_+aK2&U~*[C+,]HOxfz~:hF0.hqa46V&l(QHueka04ihZx.s@GkrWh>XWQR]0P' );
define( 'NONCE_SALT',       'ja,jFMyIadFgk4$ob,+tgV9upnUrb8;q*){a$/I:iH,b2 =`N3D*i`=-HUz&9 2c' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
