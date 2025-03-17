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
define( 'DB_NAME', 'skdc' );

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
define( 'AUTH_KEY',         '584ECx_1/5;_6RKz}mt6%qPD])p;8x!P4u;TOO)irM*a*p9|74za?~ITJw.Q]3j.' );
define( 'SECURE_AUTH_KEY',  ' hDOq^+OYNF?|2j|{[i4B_V[L&q/>,IDZ?1igEm?0HB=O~? 48Bf;=1A~kyZk<3Y' );
define( 'LOGGED_IN_KEY',    'IcVu%vMxXBwqkKhauvlE87YM8V;exS_*(1$aA_Gb-3=Hm1VdUw1>W/+2;e[^R,@#' );
define( 'NONCE_KEY',        '4^&L@Q2hqQ=X^OPf?9=M:k}_ rXXyK7vY~M,r0D-yAw[$ph|;8]4:[?-sP-(T$mr' );
define( 'AUTH_SALT',        'B0Zls<nt0rWu/rzvS]MJ|8A6IPf=ORAduQ(OV0 No?&6l9Ca^)2 j:U[%DAI [s6' );
define( 'SECURE_AUTH_SALT', '66>?j<K.XK)UM4`Jp#sG$B3<;um8lPIhE|TEB1O+yHR(yqO4m5d$y]ydRa(`8$dr' );
define( 'LOGGED_IN_SALT',   'mc78An>FGx3v/HBQ`wNuWlkU.kC+WOb1]V8L+J!lM~ %/[d/2HM?UQ%kopd03[$s' );
define( 'NONCE_SALT',       ';Sf`U7JJ~VXO#dJlxn*rd&r]3#h61yq.q!dKJ W^c!nqQDtcyb5V@L[4kv..^+dS' );

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
