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
define( 'DB_NAME', 'divethru' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'oI-:@z,h4y[A?n{J_hnUi-QtHQ&]+Bl|45]?h 05v7y4U?iU]%RT{@zhz4pKK$k@' );
define( 'SECURE_AUTH_KEY',  '@RcUL}Jv]oq-j`QWaLPi.e=kL1eVU+YIH=riL.{|!-j7V9Y=G~YIQ2SoN?EOhRac' );
define( 'LOGGED_IN_KEY',    '!:Cn5$6z|1G8lq*z?(s$#%t[$O3Gw4cak!To&4p*^+vWi%%*1zB2[K3r{H66*hz;' );
define( 'NONCE_KEY',        ':Byk*^(||9D1PpJqD~`|qHar~Fp3([Cfbm^^;6#>hgApjBR+z.9&C9&W^TdP}gR!' );
define( 'AUTH_SALT',        'f3N+xc._1$dc*&?N.*yS)=Ep@+%6%wgJSM8v={DP6~Lwm)M G?dpJRnGvNLD6dOz' );
define( 'SECURE_AUTH_SALT', 'gI2[X(8..%9=NW%}?Kn2R-WJgFJ<,;Ag-^h3e[EI4ycM,z.d(B#*EY<&;RG5Pp,6' );
define( 'LOGGED_IN_SALT',   '^gq3,5o|u^!|Mpd4#4-.(<6EdJgJV(Aw q{>s|;ZlD06-e!HH`@|,DiJY/CT%5$Y' );
define( 'NONCE_SALT',       '=.Y0scRSkET={tf/ GH3d%2i+xWU|V~`M?p#H864}uRaSB!$PE4d*^uL_6?.3^Dn' );

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
