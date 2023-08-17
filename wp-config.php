<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define( 'DB_NAME', 'alcurnia_admin' );

/** MySQL database username */
define( 'DB_USER', 'alcurnia_ad' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Alcur360@' );

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
define( 'AUTH_KEY',         'o7z3C##P#)Jg02kVLQA`lcJ9!]k+fu]D{DyW#?mA4]S/ax.Hr&)QExR!E1eJc4)l' );
define( 'SECURE_AUTH_KEY',  '*1>0?.WFeXVe9uHXcTGWF#o(U^EFQ7W33TC5}&[S&~xX%8S:{|=XYPvJi&JtKVM2' );
define( 'LOGGED_IN_KEY',    'QapCgm4&,0q3ZY5<./02Li/)I24%U)AV/;?WBW+6vJn$JD,~BD+AU4k?FLd+;,Um' );
define( 'NONCE_KEY',        '<-$R&heY*(u.3^W,R5O~ o}.!7Yy[I$)XG kefchW6xkhC:_(sT@3_9)OkhW`J0C' );
define( 'AUTH_SALT',        'x!gEW-12fsBT@&M4Pt><ODCh;eb6Az0Xih}vZ>_3S0?i-ob,Oc(D5D2kt#*a.@3e' );
define( 'SECURE_AUTH_SALT', 'T2HXn6.<VB/l-kNI4q&_gvi%e NC#qfB!;FH|9hV_ZC?n/*~^`s~nDk>/[vQ#J]|' );
define( 'LOGGED_IN_SALT',   '3Fe#w++Ws;{#zpbWda|xRuCJ(O6LxU5<Ay.~8ufE4+cH;mQr)ffpGTMbIu4%[jpz' );
define( 'NONCE_SALT',       '@8t8Wkfsnjzi6RtB!GUuKM/9?ZCuh0ulSV~XE4DXrG_g<DJ?Bpmm<u^P2x%:@q[F' );

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

// Enable WP_DEBUG mode
define( 'WP_DEBUG', false );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

