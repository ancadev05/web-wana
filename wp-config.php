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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wana' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'qLd9bRJ a+mr@,rPEkc[Jy{o@+@}^OAQ(1|QPJoWJ_bz>5#s2K/rasJ^a7S8N/{k' );
define( 'SECURE_AUTH_KEY',  'J6U:6Gx =75ceLrSU_L48|*^bM#^^6NG[iWOH-@(y{z946M+]~~gwPS$>;XCDVF ' );
define( 'LOGGED_IN_KEY',    'ziJN7Ol@nWr!G5|``{L`t%%VVY}D]5/=T+KLkm/dU GnF7HR)vnAlDg-?1_zr|,S' );
define( 'NONCE_KEY',        '1e]ed2b-?EyTi87 4nM{LK[yG5KC 24P&+VDw0u)mIv8+,U P+xt9fH^/HiC.OrI' );
define( 'AUTH_SALT',        'ECz!~j4wPVPBe{I[+$I;Ed#yX(*+eik(xcl>FxN0gcWQo}t(mOQ-ff0o/`}t`bO+' );
define( 'SECURE_AUTH_SALT', 'stInY#^m53MFH}R/IX>nW`.9pU5>]#79&hTokQRBX&Cc#&cQ/yf;x4qJDN`lJVP.' );
define( 'LOGGED_IN_SALT',   'a;XdMTy(<vZr#,mrt]F*@*ip1*_Rr;eE*,:. Q(ijU Zmb{aQ4mTc^[3w3aE}%T4' );
define( 'NONCE_SALT',       '*x(jC%%Jw5;gyz 6=^o`JWhvdo/p?w([ZON <%~Y40wH/b-QE?jIXIMWgd,h96 #' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
