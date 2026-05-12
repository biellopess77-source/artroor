<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u385329698_ZCa6P' );

/** Database username */
define( 'DB_USER', 'u385329698_5J1gK' );

/** Database password */
define( 'DB_PASSWORD', 'nqaQUlmrJs' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '){njR48[&qbe8{p&T0E[q%m@=qdj?D;JWZ2qR@~6r|uKXB~MXawg6rh9B_o5APWb' );
define( 'SECURE_AUTH_KEY',   'S~qz:36;dcsjt-QISIYt[*;`XVK{a.su0<fF$HRz?)$w<r9PJ, MX+T_!/Blo/_7' );
define( 'LOGGED_IN_KEY',     '+DzSYImH{<8L79gj t6]T;7`z:%>P/jnf.<P#^+RZ`o~w58]z[;k9/11[`SJu`x}' );
define( 'NONCE_KEY',         ' !Qs7; #$Up+Tzg~vH%:37ty/;GmT?IPZ%;[4>Pm+VGJ`8B!s<:8F+j4eKaH`!CG' );
define( 'AUTH_SALT',         ')Cxm~V1H$-?8bVxRqJshArk-3|Gf^GmGG#@@E=5*ilPG!KRRZcTsX@Z~p*S}xy`J' );
define( 'SECURE_AUTH_SALT',  '6G6!~cx1E_oB3e-Bw+4S~1][;.2e}RHrGlN$7i5Ty|o^Pj9cs+}Lqerx,&gXg9:,' );
define( 'LOGGED_IN_SALT',    'w) !m9bu/076vS0:lp[FRlAgz!ca5~-9CQrn(vV29a**E~k*.tWJ%6cAxn~s&wB2' );
define( 'NONCE_SALT',        'cw#:ep.vaj5tYmbUWxk&tUi`sOD!8+Y}?zr~pEdozIjj,:jj :sLdL:;kP=:rX(`' );
define( 'WP_CACHE_KEY_SALT', 'zVo:Wha|Wz%tLq_izW;g)>K}mSVq!.zEL[CKJXke>@V{588F5Rd>/ij?C92Ipq^j' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'f5df2c68808005d6a5c71eaa39beb183' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/** Aumenta limites de upload e execução para importação do All-in-One WP Migration */
@ini_set( 'upload_max_filesize' , '2048M' );
@ini_set( 'post_max_size', '2048M');
@ini_set( 'memory_limit', '1024M' );
@ini_set( 'max_execution_time', '3000' );
@ini_set( 'max_input_time', '3000' );
define( 'AI1WM_MAX_FILE_SIZE', 2147483648 ); // 2GB

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
