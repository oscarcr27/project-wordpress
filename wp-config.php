<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '8Xw&F*b3YnY]m`0B>_|bZf}]4iyw&tXir;eSb<j?Nxb1/7:jZ#Q}IEc2!#XY.TQ[' );
define( 'SECURE_AUTH_KEY',  'Hw-*^rI$>Al<xgQ1l6#}OGlvx6-gUSHXS>LY9UArUsZd<a-4Q;AFV!1^:*yz**9]' );
define( 'LOGGED_IN_KEY',    '= }!~ G^NeIv![<VtmH2g8QaJ7ms{!+?U&mThgx[n)a5>]r:eip;IbN1l>1q6O~s' );
define( 'NONCE_KEY',        '*?+?sUD@^#7v9JQrJ[=6kZ=RY`pM[_W=#_-`#p+m;B^R*2vE!AOvP|JL#7B]TwHc' );
define( 'AUTH_SALT',        ';e-SI/@y?1U<-idAA!Eu %DGY?sdFhikWbID9%#Z,}(HUL1^TaCFW.c!Ms5F]qN~' );
define( 'SECURE_AUTH_SALT', '<+@1 Ri,B,D^6:%$F {Pj5Nv^=hfn:FgA$z*2!wEA`U,@6v^XXYG;c7Fjz<i-g||' );
define( 'LOGGED_IN_SALT',   'Ux+]+Zf7:T>tu]9mj>FLO?V2u=0:C8U0J.Hi.IP[imO*U,3QLg@zwC*3j8A@Q{9x' );
define( 'NONCE_SALT',       'p)N+sZ1w`))6}z7i>gbB8y&lw7s9zz,)4x>&tdGHX04;iu-SlpRX=W+DsyHx(:E}' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
