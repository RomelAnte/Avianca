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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bdd_avianca' );

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
define( 'AUTH_KEY',         'YW`(_Kve~ISy~U`cwi],)fhC^541]rm< 8n(fO>yHXCUp5#1X?$z_#KDRtn+du=w' );
define( 'SECURE_AUTH_KEY',  '/N8;@<!fXYR9]HL:mlvk|>6XXILtVnw01csLSC@fQ;,+#MvG*~]8DcIl|%OVisS$' );
define( 'LOGGED_IN_KEY',    '3=.)I2 uYXx #|WL!Xt*~,Sch6LZ~&Ny&SrCwC:kQ|_0r1A_Y~-k71,kRN`|05yO' );
define( 'NONCE_KEY',        '#LkRg`QW`(/Io4/d08R(0o?r*?+hMLX$J8|$[*u;Ts8>aQJu:OEf1O3^;]z|}Ej}' );
define( 'AUTH_SALT',        '<3q5+wxIlZTC{Uh~QxW94{+V5~Qv/W7Lw)h/D,Z$7UZ|SJG4z1;jNaI&cy%_Ce=o' );
define( 'SECURE_AUTH_SALT', 'eZ_D2=t;oe)KltIXV6#@MKoH. gj=ce;s{n=<2h:ETmTN<j0E%4TH9=+<iXmE7*Z' );
define( 'LOGGED_IN_SALT',   '1N&`{3;`9S17{g9AL>$PkN$.(ERihl<#{)LPjIP:aY%P<)=K$)@Tr<4J(5#qxk0L' );
define( 'NONCE_SALT',       'scVxnn[7Q2c}lGCTNc4%YI?r6.F~-i8G&2r}qz?}AW<kREr`Cx^<9RrlotPaa>vK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'av';

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
