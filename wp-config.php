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
define('DB_NAME', 'lrsy');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/I,?r#xdE $V,/3y[8`u*J!nqvz,8@%1+=2?IkG]-X).oQD`2@c+ma[nv6k)4puh');
define('SECURE_AUTH_KEY',  '{+X]fFyVnkJEyoEHFn#A_yE_TvD*:*$&0vb*68d3$oE`9B)0!<HX?u.1nnC,WKz@');
define('LOGGED_IN_KEY',    '1c`,>N}Pza4.;isi,1nBh,CTDak`jre=/gX}.JUBbSz1dHl7>5s$qX+G.CWBR0y_');
define('NONCE_KEY',        '3=axS|h&s*4j<t%<Dw(SIHvdwBJQyt|V|UlRl`_BZl4:h2Uo?zhF<#;1juN[-?ry');
define('AUTH_SALT',        ',S:N+u,4AN9?:UZ04;Vb`&f+ps9^:Fdy2{D_poiN8XHg0CRRVEXV{PK^{oq;`>nA');
define('SECURE_AUTH_SALT', 'b.z-]R%nGD1rJbC>L~~`6#Emjt::`Js#^S|z[[>wVKRZ8}H1E]k*N!QCy`lA*<QR');
define('LOGGED_IN_SALT',   'S82 Fj]MT@>~,eOL%f,.j8eJpiB%VmL#(gbn#utp36$mK,G3$ETr^7KzgDeVVU@a');
define('NONCE_SALT',       'Z{-Tk{U# ntIj#C_!*y1;c:+>$-nUl0>_!q=g<8/Ic|4K%Ga$Sf--0=&0J$R(ont');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lrsy_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
