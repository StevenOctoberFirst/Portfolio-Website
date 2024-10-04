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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '{4QbyF3<YI##+oMS*@YKb#`m)KuMk<|_B9,}Yy dypR;ZcAib6m-H^hc?*[q?;75' );
define( 'SECURE_AUTH_KEY',   'M>|PDtDgZVvFJr/5C=_78S~)PY`<]rgH3D}L/OkDV,.lf!YW h(>7N^VY[*dWx/]' );
define( 'LOGGED_IN_KEY',     '-|O%P8G:Si#q}Ig8J>KF2<>B%|>`~|/Hm$Fy|:0MM;LO(i s>rTUer[lxT6gX)>:' );
define( 'NONCE_KEY',         'Br,# Px;/}^J<ih$IAY8,P|C]43nzt+l^<.ErQwkiE[~j/4pud(kxmCS87B>c6)q' );
define( 'AUTH_SALT',         'L KoBwt?F.ufi>|IF<}~{f*`]R&E0%U<<g9pymB3-=kVBZ!Q[6#QkN}PqS*M!$=!' );
define( 'SECURE_AUTH_SALT',  ':Rdb}D-)ZIF!TKHg161Pefz7t1O;(~>sUtxCwcnqu.#br@(OA?%ANS!E9U<^N`cn' );
define( 'LOGGED_IN_SALT',    '13)L[YaH.M(gD`3; 6vY3N,p5QKKG%vLgE3|<Y8}<V0;.zqQ9I/P|($+&0zdP=N{' );
define( 'NONCE_SALT',        'l*S2cb_uM<;gu1(0]$V3A::P(iu3prkM<9_6-+Ex8lpImU(-zi3+5.4-V]xy5Ds;' );
define( 'WP_CACHE_KEY_SALT', ')~9f=wRJ:6$/8f:o35I}MFU8WfHeG4z,u=)M[Wm!NL<DP-0_>/T%:8yE`Se%iIv^' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
