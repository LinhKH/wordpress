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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_blogs' );

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
define( 'AUTH_KEY',         '01$^j50<U*UIelvBszJ6E;V$O9@RWQrdf:+$KtBpw`rY49K3xi`3mF`Vu7cWNKu(' );
define( 'SECURE_AUTH_KEY',  'AQo7%v,hCn1wz>%2i4Dq~y?F9)=V<S>.Qcqf9Zb/,W.C$CM/Kna0.#$@h%11_YQs' );
define( 'LOGGED_IN_KEY',    'F&uLTjc](yyA%D2iIkR]g`)*C mD~7aR x}>xy$7]cI0oYXC.@~6W~8z_C9*[!2O' );
define( 'NONCE_KEY',        's?afTM<j kFXp/aT<=md*#i)liMp /a^7K2V&>{q,U<<E,hM54?d$:BG4-=n$yv9' );
define( 'AUTH_SALT',        'Ermg790Vc#ccxEnff$-F$t61[*}.{8t/4qkn$eRm(A#-N;RKxjYqUgeL;!W_l1N]' );
define( 'SECURE_AUTH_SALT', ')!P%7cKHT*d}J|L+adj~vvtp)6~3ZZ4:td^.[)U9QNNL,U+ql}ABgXfL)*b!E{@P' );
define( 'LOGGED_IN_SALT',   '?]LEY)xS?#[_g$+2**7c<BW4;d0wtJ)j6>f#rZ`AaVNlrTV0`u81%&vpa^|E[#a+' );
define( 'NONCE_SALT',       'j% (!kkVzcVn5_k@Vi#Ep`{EF%r,_<dHM odwuIAeU|I-L/p,_AZw#~csE=aml%%' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

include_once 'new_config.php';
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
