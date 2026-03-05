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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '*uuAh73/5I@R:Ad9z-dYnKq}bD[^S[!HXs[-?iBR7YL!_Iu.8<aAe-b~m@!CBc{J' );
define( 'SECURE_AUTH_KEY',  '<3TTmtScQ_1zFl$.K,H}!I5!0gD,UZ;ql9;N}=k+bypHr,O1MDpJa9>qYa_j`O{X' );
define( 'LOGGED_IN_KEY',    'WEM0^Hlz^;y:?eB!@.bIvP|al0q#;QO!ANsy`+k@k_^)I_|G(#7O$ZL,:(>o;shj' );
define( 'NONCE_KEY',        'c`-doDXOJGxU-atlE3:fyYIy] WOeFh.8xje(;uH8)u#^e[RK^+5/n^?@r=l7XVx' );
define( 'AUTH_SALT',        '350tmtwd*c3Obl`XQuUlnWJA=pIX_cfR+^E=r;R65kU>O2EN1tds%S1 M9dBL2G|' );
define( 'SECURE_AUTH_SALT', '{t/@>2&3*A9nZ [!&hol{qs&,1m_-]&h+ww{{{(gUjlI?Q@pZ[|Z9%cXdz0~MSPl' );
define( 'LOGGED_IN_SALT',   'A0Rvf1W#n8+&uUJoPtNrT!w4h%8u-8}ta.od]/*m2,|4$h1fDR~W,i%}83dREe4/' );
define( 'NONCE_SALT',       '5kQ9zlhxLi*L;6}#@e?!V7o-<VaB[O7$d9!2zn$tlcezWf@W)%^V*$p#v9$z)UX;' );

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
