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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alh_fabrications' );

/** Database username */
define( 'DB_USER', 'forge' );

/** Database password */
define( 'DB_PASSWORD', 'oUWKJzkWPVhvlMLqiViA' );

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
define( 'AUTH_KEY',          'pVj3d@Veh#B/ {ub%D}x_Y6=Z-OS7Y6mZf/{<)k6El$_pmChDV|EoN=@cND@^o}2' );
define( 'SECURE_AUTH_KEY',   'SwBGK`rx-/k*d5`;+$^o!gp=%mw?vj~,N%CqLAZ#Ue&adtt&#fcwu8rSP;dBY1sE' );
define( 'LOGGED_IN_KEY',     '4jU+Hx9[`AUy(L@E{k#y6Xs_@;e@%*|t,VOQVaUFB8/wYH:fRJGADof~+y,wm=,n' );
define( 'NONCE_KEY',         '`,c)vhWmliJPV aMQ|^tU5|<I_wRqEHkLodq[Z#MPDSr-FGZyGM1_PHQ3L>4UqOL' );
define( 'AUTH_SALT',         '&o7Fb:Shpfikw0LZ%sg0NIOUNc(I#q-V`9:Vh}hpwe@R-jQ&1rZIuVk(8s&1sx,e' );
define( 'SECURE_AUTH_SALT',  '7yu|Prd0Bo>-9|pHys4^!C?P<s 6rm<ka8^On!H(%[9`1<DE6HIak1UbTof0C*_c' );
define( 'LOGGED_IN_SALT',    'v4Wph]LXFJO=q/ruP.B0V)[bF4OZH]`CQ C1H4:(z5xbH,YVe4pkcxN8]Rxn^3Jx' );
define( 'NONCE_SALT',        'z0DL p45gyU5I(y|e$,Hv?M/reb:`N@$y^7Wz.g-iHGg+$w.Nl5S=w6$0? [wti`' );
define( 'WP_CACHE_KEY_SALT', 'C7H~A1;p8W`Z5gKO)HlE Yd^/Y>0td>kizX56,X6**NLe|Y1+Uyn=]CpB0|gr2@3' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */
if (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && $_SERVER["HTTP_X_FORWARDED_PROTO"] === "https") {
    $_SERVER["HTTPS"] = "on";
}



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
	define( 'WP_DEBUG', true );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
