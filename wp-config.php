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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nomanwp_db' );

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
define( 'AUTH_KEY',         '9nOOn@GM~o`))<#L?r##N/<]4]<C{sVN-nU O!YLLNN}I)Lxtq*$H#ol&5b^HQ*f' );
define( 'SECURE_AUTH_KEY',  '?5jN_hFXm$rrzqG2kXry8>]E~X~G iMlndQtCo2ng4x7m)DN0!NOx^?y$iL`sa#A' );
define( 'LOGGED_IN_KEY',    'D}.y3KH4HmlBFoa/+N_)m00lq04qTxe(/$Cp/mzg)ID(:KR0`}nJ#@ 8ULe4UIoT' );
define( 'NONCE_KEY',        't(TwQC(e<9t|K7DHUN32LECC_v-,b|7dyIC1}S%]$eC>N]-eWy?*-/=+ewDt24Cc' );
define( 'AUTH_SALT',        '37]74wiacmE{gFb%}Albd_SLi;>JW[N[1b %ewA]c~|A8Y;kL9;m[K-m1}A8g;/_' );
define( 'SECURE_AUTH_SALT', '4@>33%@3f2Moo~.>]o-9upSTp|=lY8yj66t/d:.6}W`X8+&),6#C1TE]vT`VRVF]' );
define( 'LOGGED_IN_SALT',   'Hw>BdenmGg/12+7er,/;=6G{-95?3_ABW>Gwh,$}=Y F0OfF/R:8|~QOC8yc2BM)' );
define( 'NONCE_SALT',       '9JLPCv-KNLuV97)/O_.HQT@FB68X&J$2Gx+z%/60ykgT }=a@&&&tHcaSZ[U:|y5' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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

@ini_set( 'upload_max_size' , '512M' );
@ini_set( 'post_max_size', '512M');
@ini_set( 'memory_limit', '512M' );