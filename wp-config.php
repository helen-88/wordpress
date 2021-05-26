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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ')Noh5)XC qsAHtUP j>L2&?;;Ry;2|o1TS:t =d^<&i GaNUdeN~jPY&-T}wX:V9' );
define( 'SECURE_AUTH_KEY',  '+Zk^hK>>:.#+JY>Q!^x{dcycp:oH72>ed4T<pb{S%ggx[DX%Z|G7<xY?}}la%)7~' );
define( 'LOGGED_IN_KEY',    ';4^LN`khS9~/kjoGQWvSwvw1w?/Qcd3M@stGo-]i}>!.| u4k$8d3D%p=hzan$P7' );
define( 'NONCE_KEY',        '/O9>6x3vDWXsN$_6N*#[Vqx]tT=|(N(.$Ye9d/J5/78<G15E,%.p_ehORN?m]pzr' );
define( 'AUTH_SALT',        't]xSZ5BPG>xy*G.f!9@Ge{^*Rh0F)ItWTEn>V[$TkT0/[|q-]0MoQQAYaX~.&vTx' );
define( 'SECURE_AUTH_SALT', '^.RO&T-IqT0s|!DhOY$Jmn3DMLxV2|:h3/io WcdrHVuJV.OLf:eb.j!Ig|hD>H.' );
define( 'LOGGED_IN_SALT',   'gXHQ_Ht}7r4@USzU#jj5NiVw~X7pa ,c03wwvMwM;_RNT{z-9I&Ljuu/o/f=95 P' );
define( 'NONCE_SALT',       '`SFwUzZVq{5(noEWXL[;/XSRlB0>$~yX>?yN0O4&n$*.T]}VH]`Xm YCGm;wYe;y' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
