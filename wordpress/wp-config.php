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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '00000000' );

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
define( 'AUTH_KEY',         'xjj;XMl#?,5&X99S1u6VQ>VL/r<1*L<Zj Unf;hhWy,SFT4LaM?L_AK;GN%`rM&Y' );
define( 'SECURE_AUTH_KEY',  '}?y=P6Lv@yqzi>MD4O[Cc;o`{f-Kod;:<_}~QU< ,KEcSGo^xP}*`w-(&k,-V%/k' );
define( 'LOGGED_IN_KEY',    '#,Fb#!dY? X<=lFCILzh<5}V3tnb6eaZ/#W_*c|POzCH^+UC-filWa@OO^kX+$L%' );
define( 'NONCE_KEY',        '<TX.8l;do5`XW%i<Y/[Cw7SQ5=S2Zq,:c}9:&UdXzvsA0ap@hyR|bCHIWODS]qa@' );
define( 'AUTH_SALT',        'J@)EAd`@zsTSJsuaXc.ftC$aE{%C3vP(*Jwq=LP?AHo+bh|W^h45piHrm+q;!.H;' );
define( 'SECURE_AUTH_SALT', 'e)~UF^#!sDy%.XQCa%e$[2V2IRP|B@g./:DR3cN-7NIn~::YKl>l,7|7VzCzGiP^' );
define( 'LOGGED_IN_SALT',   '{.L8)a}A{<3p^vFw#AuVnuJf(DeH-`;t]B8ZMLw%Az~-IH<gvLM.RjjcRMDv>]v,' );
define( 'NONCE_SALT',       '7&+80S1y($D}@nAr}[AKa,?|hK=taB<Jzw)>@U [CmoOt*h,XwA<@zmk:fa0;TNT' );

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
define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
