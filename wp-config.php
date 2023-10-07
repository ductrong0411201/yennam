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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vplsyn1307_db' );

/** Database username */
define( 'DB_USER', 'vplsyn1307_root' );

/** Database password */
define( 'DB_PASSWORD', 'Z6s2dupL' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('DISABLE_WP_CRON', true);

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
define('AUTH_KEY',         'Z|D;`fNt_(Fw,|Phz!(c?~&~DSzaH$E-E ]ZGRsnTSG,9t9?ZX#|E:l8}mB.TLY$');
define('SECURE_AUTH_KEY',  'Ld]!YvSoryb0^t9a74;x~J7k#GB>)_jeksB_Ogxv.fug*VJ,r,:Zp{pvJX(}^]l4');
define('LOGGED_IN_KEY',    'c-(dW9F-D_ov>c|Yv| -_}qtswPUl<JkqB-y9zOY(-o+M,:e&jXOjZG4`GOzL0%b');
define('NONCE_KEY',        'MMZ&H2*Kh-?M]8o{|dgs).3p~*#:0``9VMQtf16pj h/[3%xJKy: *=XOlF+%Ej>');
define('AUTH_SALT',        'ITfHi.S3nJnS?nr?X!I_rze_&{oJ}Qe:T_wZ_*cG;nqQ|!TM>m4Cb$&B4pFg?05L');
define('SECURE_AUTH_SALT', 'l 4AP(|*Xq:npClb[ :={NDq175Z|90xmQ$Me/+fvWC%@mp5qV6%yRP[Kq+dL*aj');
define('LOGGED_IN_SALT',   ',n=n#A!9xItK]skTbys+*NAgH M3>8MH`ADfc-#~h>t9U+;-ow1m&])j=*itM8}F');
define('NONCE_SALT',       'w)*`rW,q|RHi-Rs-3+Jm`}<eKf#I3BZiZO&`mcW|E7yc?Jp%tELEooe07OYI.AP(');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tns_';

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

/**
 * For TNS developers: Product mode.
 */
define( 'TNS_PROD', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';