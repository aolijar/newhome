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
define( 'DB_NAME', 'testBase' );

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
define( 'AUTH_KEY',         'n-z7_#l0W%<zHR?VF5o)O,NnfZqO{5Y&N-]`p&O*_c3`D2g`VT%~a?*pjpDknzK*' );
define( 'SECURE_AUTH_KEY',  'stw=fm`lgO/fcAUZ9b|B:lOA<nW}mr,/Rghfw6vupdB0#8$I(nK;-k}~5,$GYu#Y' );
define( 'LOGGED_IN_KEY',    'Gk;GE HUp&oJb6J0lL#d1{yAM8F@^&Zz(R%C7w|a.5A|2e*J>=<<[-NQDY3Rzo^}' );
define( 'NONCE_KEY',        'F.Y06@;1e(7H#[N.rD#|y_=9BK9!o]*u0_p_2H[4=sy^q#1T4BX<%au+P;PBlnq&' );
define( 'AUTH_SALT',        '%4:NZLp77;`9;?4Wy@[{%#AvUKYCu`1*8.|T1Vl#MyK610^?7pBXsi[@zDh`o+lk' );
define( 'SECURE_AUTH_SALT', 'tP:|n-g57e)#peM ]=s0DI3|<iCn)XR#HyXzQ/j@$dWHp^Hn3JL^/K^$q]E.rcar' );
define( 'LOGGED_IN_SALT',   '/FjHd+}Ftj+9TT<vPd$$`|9!ipT=bVJoN!9gI(%1k_6XJiOX:InZ{!nfjJqXu8D}' );
define( 'NONCE_SALT',       'tkPrAgwc+oX/>F<4RL0Y&lOJwqBrWQf4[>1V6w*@t6;`6=+|}v]u]+0C6BJNLKH[' );

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
