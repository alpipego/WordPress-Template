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

define( 'USE_MYSQL', false );
define( 'DB_FILE', 'wp' );
define( 'DB_DIR', '/Users/alpipego/Sites/template/wordpress/database' );


define( 'DB_NAME', 'database_name_here' );
define( 'DB_USER', 'username_here' );
define( 'DB_PASSWORD', 'password_here' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY', '`g93As<NlFf#O|1{Noh,3.|C:?n|6+Xv{.;]qx|(D2/>TSv?l4-lj)H2l!/ixZ,v' );
define( 'SECURE_AUTH_KEY', '$b5y`NKd2Q@EZ!N|4M@6N%&Drj;1/vJwVDtoj2W$&p7?7o/_4Rz[&gwgUJGylp<l' );
define( 'LOGGED_IN_KEY', '^VQ-?4P?OT;J-Z79867h+i+ Z;$*yI^9 ><o1S|X +4s-VCP+X`6a#]M~3hp(Jof' );
define( 'NONCE_KEY', 'b9O{v;,uFF<,bN%STUB^?nDJggA(|Q{v~Tu)>w|EeB-Vk`+l[(-Sii-P;h?XQG|H' );
define( 'AUTH_SALT', 'x=a1/|W3t kYpM+r$.Ce:p7X-GrLlG&+MV+^^ l65YreURFY42y!FCS*N`-|/2GQ' );
define( 'SECURE_AUTH_SALT', 'QJi)X@EjMuh$2tuuJ@L~]`dH|C>KEu4wM+56%U |jbs9%w;F~m:7W6_nNcG+CKZf' );
define( 'LOGGED_IN_SALT', 'IzC~.^IaK4P+h^Hy.`4G^j}s-+UO(y+Xy2oaf%oj])_l+oD!yV1h+~|O)[|Y/7xB' );
define( 'NONCE_SALT', '24z0<-:7~f`aHVmljuwy)8x #z;.fMR-{=> $+EC#[u/k|OcgJwXDICm|8+eU&j}' );

define( 'WP_SITEURL', 'http://localhost:8080/wp/' );
define( 'WP_HOME', 'http://localhost:8080/' );

define( 'WP_CONTENT_FOLDERNAME', 'wp-content' );
define( 'WP_CONTENT_DIR', realpath( ABSPATH . '../' . WP_CONTENT_FOLDERNAME ) );
define( 'WP_CONTENT_URL', WP_HOME . WP_CONTENT_FOLDERNAME );
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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once __DIR__ . '/vendor/autoload.php';
