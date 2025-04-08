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
define( 'AUTH_KEY',         'B| >r+o-o+e:y*<=fhLXK0_r{.hdN;oE;)xSRJA`aH1YuZMF8:Lz5nN5mJ#3JxD7' );
define( 'SECURE_AUTH_KEY',  '.&nYf8uCKCRA4}`{eio(gtRshqt/6g,sq^~W&Nk&uO3B$rZ@R3x:OWe;Y|Ut#{cX' );
define( 'LOGGED_IN_KEY',    'RG2[=A#Wg[-^zmgS|w<TPOvJ%}8e:=BkYo=F|#&%>*^o/+q0$csKL)(kVE;E>QkM' );
define( 'NONCE_KEY',        '(thC-U0e,O/D4YeX1dq9g#vF4NSP4mYZDN,hUp||ul,/P:^7/@T_ZNkL1-C6=Y/,' );
define( 'AUTH_SALT',        '733xK<V4t2-%d7,xn4S2Q 7@z<aWr16#g#.= _&O)d(]/1`uB*z@HTUtU^3FjH0}' );
define( 'SECURE_AUTH_SALT', '.^6O:Td5!1%ArL4+^})01w3xIX(<v:~Q!nVd-sXO5U~b9BK{p-(W/-nvjEVQ>cj(' );
define( 'LOGGED_IN_SALT',   '$dxz6 |[kfPiE5 j-r4j:!R4IB*>N0m^+37;nu5~s7d*4]G]@DR}mcfcZOzRU/X3' );
define( 'NONCE_SALT',       '4$};78MDOFPF(-x|~c&T#W~>RGT[E5w<7i.K_{h/>!UR=Q~<KWKV&+&MQ2B` 3}/' );

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
