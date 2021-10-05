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
define( 'DB_NAME', 'wpdemo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'OFSOya>U8G82P]:d5xUw4nymNH@@5~yhfU ;oAF]jcA/5e@a VNBX9f0@0PmZQNA' );
define( 'SECURE_AUTH_KEY',  '#h2]2;4-8dI3bK9fi=%BQ{`byEeZq2ZJ%NYQx1-?Nw&Ex8F@ca(=nb+6%`vfe5aS' );
define( 'LOGGED_IN_KEY',    '+CBr3ZvTxzt69SF_nb*~ISd&m#a+AKS %Td-pi?^{EC>0Y|qtT-62YGS-BChR,:v' );
define( 'NONCE_KEY',        'uL_b9qx5`(=2{!(K1Lf._<zU1DYirmEk/CeoDE7?}MD.B/0gDh}yg)RgCcd6b.d<' );
define( 'AUTH_SALT',        'KihF+qtH^*Q/1M@Am?^Krz}oFNp9>hfBFk.[KYd|iUtaFx)}&n9iemgJh{WLQ/)z' );
define( 'SECURE_AUTH_SALT', 'mG|hc$! itb=(kf=n-is89|$Z!/MZjtwTUX=9{6r$-P%@royrOj]):zqRb(~r!Jl' );
define( 'LOGGED_IN_SALT',   'lS$~^#~i!ZlH*m;hZoz<)rIReAz1ABtHUVb?`y}VzJ{1Zw5WBM~K3Uw=5dI`/P:~' );
define( 'NONCE_SALT',       'J {l=CU^$s;RG&w,iI?KkRhe3.?SR!IjR/rg$HY/)<X&dw,k&qEs, D/9y9+>|, ' );

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



define('WP_ALLOW_REPAIR', true);