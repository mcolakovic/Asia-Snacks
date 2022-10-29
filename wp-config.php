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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '@15B(e>c?XYZKzI~X].8OG62E:g#A(thc=8|HZ6+d.{iPw$8RF5`@ZC8__+~Q]fq' );
define( 'SECURE_AUTH_KEY',  'CPC#JOzS/)[_xC+Q_[]`_T2><,6RxL.vC9F]q.=aHdR_ww:q4w|F>0TY?6KM0q,y' );
define( 'LOGGED_IN_KEY',    '*!;gf=nAN%-$p=wFi7MZvb#d>}~Zc`Cc|VW`#j|;42r ?4O} P3E`Rn!9vR s+^B' );
define( 'NONCE_KEY',        'XFSoaH1W0uwAiqPVpXRu`FG)wJ(X<3%F}WITKgnFmgs9bU,Me>D}/ BOq[a1dXpD' );
define( 'AUTH_SALT',        '!6<wjDQUvkTxVg`?^SZ`w@kg<R8kD(n3 .(?pu3ARHLh~@5`cOwD!J[_EI$2u^IS' );
define( 'SECURE_AUTH_SALT', 'W#.g9eJ&5~U>.x.`~z?yQ.L[pmp{#k$+qHr#9iwENfrd?KIe&N TehNFRS6lR$z=' );
define( 'LOGGED_IN_SALT',   'Oz?+8H5W%+FM;kVsl7<iN_No>6FpF+W!oT|-`(Y.(.*Y>rA?ZBT8Ri8~mh^T8v=V' );
define( 'NONCE_SALT',       '3wbuG Tgkz3i<*]J!Z(9hp;DPMHqsVN/~0:.?f/*QpA?Q$gc<AO]n^G?kcZtM=nx' );

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
