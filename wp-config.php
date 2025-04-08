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
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'tw$x#mo:C4|nz/7Yk{mLv.B4]B[Pt^PQYdL#$y4=/((?Q:<sqb<rP$$i,2:;BT-j' );
define( 'SECURE_AUTH_KEY',  'M|k#M~cQ9O)^%YdRI/}Bl#]+xpa<zdbZK}^srj:2[N^E6k#E[s3X<X!0cTSmVh>I' );
define( 'LOGGED_IN_KEY',    'hQV6;oip;7{whspEx-c6vp,:>JLa(<GfsQ{~PBAK]p}A[OfNf0F<)2W)w:|^bpy(' );
define( 'NONCE_KEY',        '*OcH?-g)06G:R$8KCOZ?,oX,Fu2m!NtY1G:?<vQ.0zIIL-Jz;;FZSnFYT-b$4w0k' );
define( 'AUTH_SALT',        'plcs-%^DcK7@C `Y]2dn]rz.P%`Q{QT(c;0Q>eg};!ictyu*A9#F83Jbe=|;`S8>' );
define( 'SECURE_AUTH_SALT', 'OnlzlV:E*=!.2:l@KffON=&u6f[6cL`Tz?QUUQbBES}5o[z(,9cTn3M/dd;<)S5D' );
define( 'LOGGED_IN_SALT',   ':rck:tw:p52Ek)nV_(FSyZ([]2S_7R(Bzu(k{e|ckq`.)tn{5Z6sw}FuJi0H_j3x' );
define( 'NONCE_SALT',       'Ws+N3?eLOf.;X+T~iG?|M#Y.4dh8B.WtsSXQhZY}4U~r:IV_N&4tqQyB]]SY)LjY' );

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
