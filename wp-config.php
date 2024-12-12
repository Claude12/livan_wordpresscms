<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'livan_db' );

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
define( 'AUTH_KEY',         ']jhLai[17_$uIXG)O3NPW?+ Q(J5T8r8YJN1VhkuU~c.{>R$AI1Q&%[#5!e<*m_4' );
define( 'SECURE_AUTH_KEY',  'odPFy}][+V(.(JIO^TJ{GL/l}LEZKkt?S[[n::x{e&=w.$3liw?`UHV;;eWx/aSi' );
define( 'LOGGED_IN_KEY',    '`He^d^m;])Cgp?GDF&]9Pvg$Bh9z|mmTIq8Mw4c`vg_o,<$CWHpK|.j`SC[r(wbg' );
define( 'NONCE_KEY',        'L/iDL3:n~D[~15tL=;=T)B_b*_U<tyVVKqY!S5iR1{*D|IU10A}+qm|HgJj,b,Rm' );
define( 'AUTH_SALT',        ',QuO]]&p*7_uRJvg%?;97<6X)a&xqwa`v%M3sIOifFO<!UdgseImh[Qf&xYx0>n0' );
define( 'SECURE_AUTH_SALT', '!%=Ac^:+rdga%^Ft4wc!lMQPOskQ_}p1/2;&y&tFphiW_Z4v%0yL3G>*dliU`4yb' );
define( 'LOGGED_IN_SALT',   'Z>:*yWKds34_eQnc;iWj<<ihxR;Gt_fIpA%3iSfl%}c-oVwn(+~q,Pdl~?p4*0t%' );
define( 'NONCE_SALT',       'a@aeK~*^V{&Sm7`=^:Ifn@Q3-<[%k_6~}ecH4%3cHXBiu~KQZA>t]+87(/) dy(E' );

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
