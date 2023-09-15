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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'manhdeptrai' );

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
define( 'AUTH_KEY',         'X#Cu(5nj0z0p7?0bh~ox6Q<*8btc=:!,*}3g^(s<-Bn_ ^(litQq18*rXlf%Fl16' );
define( 'SECURE_AUTH_KEY',  'N^NC<uhs|9#bev_A~;TkxX?ig<zpV-FK.4%HK5q<j2nrO9%,u+qkCyv/og9[tgPi' );
define( 'LOGGED_IN_KEY',    '{--gy:qVOE4+(&_mJ[|Ycq3cKvO%lw5Rk;=d>#j,}NZoy5S#{80dG  XmtI@tTO!' );
define( 'NONCE_KEY',        ',w700aL1XzC[rb]}Ea!kGp+i?%t91>(d71![#WH>vN6qUp$JpnLd:}R3mr)xLFCf' );
define( 'AUTH_SALT',        'ITJ!,3.A;#p.J~Le$Lc9=hdTk|XL4m1O<go)%`he[_qTX~q+z[!)sWY[P3j]nk0w' );
define( 'SECURE_AUTH_SALT', '_c@0jO{_+tAef |}t#U^S2kf:Hi<_.,1]L|<@#c]!XnNOEewUFoW]dR>Nz=)ID39' );
define( 'LOGGED_IN_SALT',   ',z&3S@vsB 4`Rd<q*q}_^|QeQPT(b+({)_G=u^z%Sb~eTK`kzs%SIaWLi3CHP$+f' );
define( 'NONCE_SALT',       ' B+uV-zUuke~/*N(;tSy=ND~)?v+;rhDATV%t|^gXu?41YEc4Y~IHVgM1ig>Vg.4' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
