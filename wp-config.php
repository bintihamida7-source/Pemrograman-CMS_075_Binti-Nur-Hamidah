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
define( 'DB_NAME', 'db_uts' );

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
define( 'AUTH_KEY',         'QDXn. lsUku3Ql*X7C@u%0Ec<3`?=b4gG5B6z<v$OflWo4`kPna+tr *LCqZq0fq' );
define( 'SECURE_AUTH_KEY',  '(c~44Hn:EHWNcfz@8e!p,{66GRICg/Eo#o,^26CVAgb#@p!ObB!y4$:rPu>p<BSL' );
define( 'LOGGED_IN_KEY',    '_b{Y8[I~UJ<nvH9(9B1cQzA4M98u?4%^hwhIcLtj<#97Rm:WRQ5TGg9I m?+V1y@' );
define( 'NONCE_KEY',        'ms0Fw`L?GH{>H$$7 A5Qo6hX:FUoM;h,h~%BhctkaL%>ry~<cjFTj$J]Q9zuzHFu' );
define( 'AUTH_SALT',        '<%N}ztZ8!x59wv9#s69Oz;/;>K[Jn[7Dn+%I^+eUuH<0!e2<9v~>90.U<3c|fL25' );
define( 'SECURE_AUTH_SALT', 'icLJy)r<@ s6)>([uS>Im(l|sCfb`RsC%4M}fLGS<!::He$;3Z<7R^iz~z9Ei3<m' );
define( 'LOGGED_IN_SALT',   'XkmG7e}_[k<E5PG@;&TBnikwUrr]>K#J$yse/KsH:7}UKJhQ{PW}9Hq&aF*w 7b[' );
define( 'NONCE_SALT',       ',iY5b<P4TpiMv7E;|4Cfnp2#2teKeYK[A&vG=vd1,i1I%s?C`ZJ1MqO870%<:UWe' );

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

define( 'WP_HOME', 'http://localhost/uts' );
define( 'WP_SITEURL', 'http://localhost/uts' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
