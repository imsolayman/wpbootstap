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
define( 'DB_NAME', 'wpbootstap' );

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
define( 'AUTH_KEY',         'uRF6S2tB4Z#8Y0.8D[?hlO@exmDl-jfgh$3_jG %%,W7XSG@4ZcpIJYO5W2?5@Un' );
define( 'SECURE_AUTH_KEY',  '@;>qLDis3r0j]P=JsoZma/ |yJ~u>T$zpNEV)w|LLHAcT/Tv2K`L9HZ/QYQq*g_J' );
define( 'LOGGED_IN_KEY',    '[YSf>0V*t_,<GF0tXa10D2aYt}}O,oCeyx:<{gv>3%JP5SH- I}I}F1}0H)X7D,p' );
define( 'NONCE_KEY',        '9bqk8!([*P$SK?,/{.aN$y^2!Hr(a!,q H~^|$d]n:H45KF$!io26WR(3_fS?g2A' );
define( 'AUTH_SALT',        ')Yu8;(NBnx}5CSeb=c=tp_2Jcc9]MjU?k<}Gn`|G7ji<1gwdY29}AbV8`+9|ksTc' );
define( 'SECURE_AUTH_SALT', 'UDy99j%2U6Ryg1LEUln(j}D@u)dS#Y6$(z/&A9*X^Ta$qtKJtGf$XWlbjQ)XrPhS' );
define( 'LOGGED_IN_SALT',   'HU[a5%a7yYa=D$||+}rjcQr(xfB(`5PleH!6v*_6z*|/q,K!@!FC$pPFCliW]{/4' );
define( 'NONCE_SALT',       'Sbg=<uD>7pRYayf7yRPfLxFHI}ol$,i]&;%EW!pbQVlLYz_iio:$j(C](dCk~_ /' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
