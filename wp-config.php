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
define( 'DB_NAME', 'thepracticalguide-db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         ' YyI KQ_I6M@$b7GPnCkvi6JrWbXmW)12Yo!N6kj=X8iSqV+:5hUR;7UKU[VGpsP' );
define( 'SECURE_AUTH_KEY',  'f|Q14-SF1~!i^6v~:w.6LDIh^{;/<U8weXv^b[X5=1;v%PMdc[U^ZnQ_W)*F W6o' );
define( 'LOGGED_IN_KEY',    'q+PfHWSXOa@_f`wef1VP<E%[+gyew8z%s@MF%1s qW6V-cl{fBM5bn5t/:q@iJp_' );
define( 'NONCE_KEY',        'nLkeETh.j$.K,W4q|bAB=uvC9h;6T}ErVc6b4&NeRg%&4J8<`1|_@FR/=57,{U{?' );
define( 'AUTH_SALT',        '4LfR(c<wBR]iuU;u+I]ENcWG1=J?|x/k$N&:en{XRTm>N,kda^;PZWe8T}E?1f,M' );
define( 'SECURE_AUTH_SALT', 'iW_97.vet|y+8C(fP(U3,_V6k|JgOUN(c_wC-/:V+9|)n}UPgIh>1$f`^rBiWtvK' );
define( 'LOGGED_IN_SALT',   ']{Cd:.m-VkqZ|!8?ZN@< Z^{#WQpSn/9uG36rgT#Nn0j7[+-?m%wxATv/RgVNS[s' );
define( 'NONCE_SALT',       '+I>)@k[!/Mu(&3evMVx{INCD_&cW=Zn!z:>KGzzBKycR]I*O0<8kh%Re;Oz$ll^&' );

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
