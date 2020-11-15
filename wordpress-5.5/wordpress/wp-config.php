<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':(~EaJW.~T/dfdv@_B2(y%4G06ANObF81JLRqNb/)3muEMs(_-OV.;A<D@E #mbN' );
define( 'SECURE_AUTH_KEY',  'ex<_*49`Y4z2Y1,p 1[3b(o&h1Kv9OPkUYx21.e;|o;9W:THe*@/2o=UMv?5kjpb' );
define( 'LOGGED_IN_KEY',    '+(fss|RmCI6bX#F~<@zx%^-vy3t<h<3*eEL?X{&Y1hF1h#y)H4hWkWoD)GnZr~2b' );
define( 'NONCE_KEY',        '=/xgsqD/%X&@pDY{6fY71?Q@b|B|vrP+^nB9yV#MES.aHQQT2=S&J(kQH2w#lnPv' );
define( 'AUTH_SALT',        'qp^5&Q}p,M+P`X~*%gYhaN>krZ3<Ibwl(.[NZH^$JG_|,(CMG:fR ;oC cb37nhI' );
define( 'SECURE_AUTH_SALT', 'gg-rf0W^+ }P5 K-]3^z0dN<%3K:_OYYb/@{|k}IB3!%q4kWo2swUSw,iq8C|C$s' );
define( 'LOGGED_IN_SALT',   '.Q~KJz>[9M04LU!~)C: mrQp O[d%*}|t#o?`@4>gDgc_gCT]r_eSYTOi>_*X3k$' );
define( 'NONCE_SALT',       'noFI&N,+h--o`AMO+!I2xq({Z(yFL&!g(`1^&]LOVzp/C13YgX9*p6}0!1@S$;W+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
