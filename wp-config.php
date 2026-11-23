<?php
define( 'WP_CACHE', true );

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

// ** MySQL settings - Environment-aware with Local Fallbacks ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') ?: (getenv('DB_NAME') ?: 'alcurnia_wp') );

/** MySQL database username */
define( 'DB_USER', getenv('WORDPRESS_DB_USER') ?: (getenv('DB_USER') ?: 'alcurnia_user') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: (getenv('DB_PASSWORD') ?: 'alcurnia_password') );

/** MySQL hostname */
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') ?: (getenv('DB_HOST') ?: 'localhost') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// Dynamic Site URL definition to support Docker and various ports without redirect loops
if ( isset( $_SERVER['HTTP_HOST'] ) ) {
	$http_scheme = ( ! empty( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] !== 'off' ) ? 'https://' : 'http://';
	define( 'WP_HOME', $http_scheme . $_SERVER['HTTP_HOST'] );
	define( 'WP_SITEURL', $http_scheme . $_SERVER['HTTP_HOST'] );
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1>Q]YMvz`?  NFPZM(NQ;Bj,V*q3l+g,?;2)ZVp/K^43E}uK*[HclF:+bl>X6U%(' );
define( 'SECURE_AUTH_KEY',  'zeFH}KA9XH}HVYYW]X$KHH}H*c0&sqA_l2)TpGtUY+ST_oNx#5jd5ot`gS?ei&*,' );
define( 'LOGGED_IN_KEY',    '7Y+Wqq+u/[|P.Vz:.ow=k56~/;b+teBmo}X.yS?eP.c,*y:1 WF,dp(2Uv/>0@m(' );
define( 'NONCE_KEY',        '{{(8j9@Qu2*}VVu*Mlw7&<-g)-2mG=WWz2=+J+IKn/tJB+cCvkUU}AVPKGO9!]fU' );
define( 'AUTH_SALT',        'h6czG zFRY>oL*BnraT-B6GyK;#:mLZ:DO}_0-b =g&{c? :n9sFO+Z{nA4Wg_j1' );
define( 'SECURE_AUTH_SALT', '-86sZ]/Pr6BZZ$BpVgbe,G/YTzy1kz7biF#(LN99d6obn#Sf#:#eg>sa)S:=1@,v' );
define( 'LOGGED_IN_SALT',   '|g+AN[Mv.n,T4iM*^LQ5Io}he<<5S-f]-~T0cz6>{2 ,gM`S8JX^KN*Apd}VX9Zz' );
define( 'NONCE_SALT',       'g{t}vQMRApSGhd{OnX5aPP5D{F3-{Y{zC{N0`.q(~}_Rq<sDL}*g47*N7SEQPkdo' );

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
define( 'DISALLOW_FILE_EDIT', true );
define( 'WP_DEBUG', false );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

