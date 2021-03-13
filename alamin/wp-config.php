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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alamin' );

/** MySQL database username */
define( 'DB_USER', 'mohin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ammu01676395712' );

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
define( 'AUTH_KEY',         'P5E!b8,Wg9yqLLkN]eHe.c(d8N%kAn3, I,Em7qR/n>BTJC?El]-;>#G0chBYp/I' );
define( 'SECURE_AUTH_KEY',  '=j91>h.%>8;/!3CHA&%hwwt/0)WYNNi>W!o`r{$YT;2)ozR.i:j,dYV?cm((K82%' );
define( 'LOGGED_IN_KEY',    'A/,s`&vt}_^@iRvz-nzY@?|d,JP>(:/Km*}WN8Z,rdy7h_mhN@G~yJ`JsB)j,=}i' );
define( 'NONCE_KEY',        'k32|3kSN1^wUn<qq1dR_-SL0yV8DkH+Ur|~6i=sMI^^5+Iu4a+-Z2]^c;}rYTALN' );
define( 'AUTH_SALT',        '%g_|fgvxVR6BrE6{+N96u7iEgEy893WY8erX(I14CNEC-),0XWSb_%DND>V4-/@7' );
define( 'SECURE_AUTH_SALT', '_QO?I4AF,$:-GSD*iHcC:EnXc+6hg/9q0!Jf0>|SDGOTr$qp.JsCVG}lOBPWv$&A' );
define( 'LOGGED_IN_SALT',   'QB9>P[4+}x!o*[_,{ID<u^Kba4!Ozy,iIWZ:E%>hf;#q~$N}(PNn=|_l}y7o[FZu' );
define( 'NONCE_SALT',       '02s|A-?!=jSkK[x9pJD0hAIY4l*GX/^fX.72X^yB~_HF}B?S*d}8 &i15UwV^X%]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'al_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
