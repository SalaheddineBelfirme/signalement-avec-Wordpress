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
define( 'DB_NAME', 'plugin' );

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
define( 'AUTH_KEY',         '|A/G 8E`M:QsYG2o$DB0Ndb^q5Rd;qvDg>O$zI^8$|$,rdG`*UUiTNpk`lS{RvuH' );
define( 'SECURE_AUTH_KEY',  ')-i;9Lc[TT2!p9NoxQe/o|%D2,^EOolan15X>)tfH]XM$]ARVzW[rl:GkU[_S>cd' );
define( 'LOGGED_IN_KEY',    'uBU_GpO;op5u?{sh.zE[iiX:O.K 59]qpoM8M xxMUKWhz6-ABSF3U:U7B;se@`1' );
define( 'NONCE_KEY',        'ubu[ -Dq8?wCBvZ^%ySx?lV~{h^+M6BzIzcj,d^Qyy5Hs+O6_9d)^A3X&BmRh*vZ' );
define( 'AUTH_SALT',        '6P^nGtj!6M1,R=c5*Nb|>Iw.)&N}fiB$]iJQdLM)U07[Bb=)@y.zSR.x}$+qx4)5' );
define( 'SECURE_AUTH_SALT', 'h2&5K2w6~G,Twi[z^iq_{BQ]8kJ;o`XBPuMU)TUj6 c!B8/e~87ax>0Xec,@Zymg' );
define( 'LOGGED_IN_SALT',   'j[k^]&PLp4wg,!}<]l_9(rnL*t`@nWF87_Rc|uX7l<a$1o%4xHo2H~Pvi5CG}YPF' );
define( 'NONCE_SALT',       'fn[x|:c#KxjYPWb*4)pMRW{!WTKczzxnUU;%V8i:F R~B&2UuVqL]1pCz;<lPXnj' );

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
