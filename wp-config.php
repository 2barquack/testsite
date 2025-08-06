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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'k;E-ghD,P(?+h5h(blnxO/IVLf;sJO`R)$mt#TF5hgu =e=o`ya7=2R`R&V^Y5@?' );
define( 'SECURE_AUTH_KEY',   '8SAW][.JJrOHxAXaLOHK](GBTeO8Jdj`jn[hu5G}G@e<nOD%?1?$wGbCd*HSHHWu' );
define( 'LOGGED_IN_KEY',     '`nQI3i]6s#%S(lp0h?vC.3VZKKp10}OEkP|bhtD9=umj# IW)Gr4KRe}8(ZN nvr' );
define( 'NONCE_KEY',         'O&<[6J&/&2:vAwH1S;~ie!jSjdT!oT9PSn#78JSU:nyWsmhx!G24)Rv<MH3s9733' );
define( 'AUTH_SALT',         'Q%~FukHgZ}FQEm262M+2BA2nBJ!w9]u]{R*s0{DR3KtJu@J]rw6dHxVhNqSjV@ZG' );
define( 'SECURE_AUTH_SALT',  'V0JhroS(omarl-}S>r<p0vVWH7C5f)$xgcjx|RG@b5CSRBodun!Es+>RV=>JT6/m' );
define( 'LOGGED_IN_SALT',    '22ckTLUwHF/eS*Q/$x=q^yG-4(9Qm3.|FV?^ :cl5k)rO7^_q}Qlzvgd?VD$U]S}' );
define( 'NONCE_SALT',        '@fD[/I@HDD@1QL*Yg-,m5!/y1HV[5g9$DNi|T>y&XTp/eNqeCJOE@i_j75`Tz.=G' );
define( 'WP_CACHE_KEY_SALT', 'O*XJ)]{#{B!Jh#kqZu.pmV`ZzpIUYwFpQEh)2w&fD;/{hiYo}Ktu{[6=wv&./q@2' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
