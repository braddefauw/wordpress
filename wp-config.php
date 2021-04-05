<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Q5/9I.*;D-UhrQx2[DoyqzT$Xpm6~6M~Wn%ZW(}hQmZD5=964aE+*09Ga#0_(gDo' );
define( 'SECURE_AUTH_KEY',  '!8l@Kmo+2gtLW^l*Fm<=Qh^o]%!y5|Q-cJF~ZQyi,1%;S,N|W6Cb/ /%:n6SRf{1' );
define( 'LOGGED_IN_KEY',    'XpPtthknw{@ljHw#m|scsLe~g@kV6{,_diMgx7/&*,lH60jujD*6%(?8)]$,#i `' );
define( 'NONCE_KEY',        'yW-00:W0Q}2~P_#>;.Vj(]b:cVEqN^$B2f_,14{m%,9.vfc>6MeQ`|KtWx8SsXQ_' );
define( 'AUTH_SALT',        'rzFZ;dZ2o BcaG7.oOWl^rj.QI$;Kf>1eyPSB}I3VN`IZjecaYptQ#18//OGBLh7' );
define( 'SECURE_AUTH_SALT', 'OI5y xs}$<vS8!WJuz6vN>*;TiYX.?7!//y*t&OC!c4w,c`a.p2k,>E3yz.B76BX' );
define( 'LOGGED_IN_SALT',   'ON1^7Ph&`+Y^GUNqgXCMM|6n3Qf(EWR$4H%I}Wg06$4 s83Ex%_jtMftGp/p!%qD' );
define( 'NONCE_SALT',       '&NSW@Qm W#(!yrQ/ukV/}G%O05=O%;;Ev(6jIl4NY)|q6H]?B IlV4.Kg%g xh-x' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
