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
define( 'DB_NAME', 'dy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{$&?=J./9X.JSzXHcShsfMD3}5ZV7|aGPx=Ao*fBC-voc2fdHJfnXGEAeHBNt*iv' );
define( 'SECURE_AUTH_KEY',  'T[(j`~74_HI* >a!TyH(u)CaT/;)&nV=/y0@?tV.QrlQq)D(n*CZFjS~qp5Jj&{T' );
define( 'LOGGED_IN_KEY',    'MI,uoWvj3:Pg$3%gQQVMH& {aUB(PEYwKnt^a:p1)[$gtOKM053_r>*AI8DxoqYH' );
define( 'NONCE_KEY',        '3`E65V/iLrbj3</TRhe[;ytwBUi<?z^m(CH5aIcLq9*9ZT +)132y3hAc2GpDcDq' );
define( 'AUTH_SALT',        'Bres&XCLg{V87#O1+cmpibHD4tC3&cVR<9a4,=Z:If3$Qb%9_(#,3B@tht.TH8eA' );
define( 'SECURE_AUTH_SALT', '@9$);*{*]RWW&.j,=:UUOn 7_fVBt}1anwu.lJX!v3LZ&||*L {y~4Q~#E6z7^^V' );
define( 'LOGGED_IN_SALT',   'qJXc$Qwpmqya=<5Vp4ud$;s*XS^g=eF[e@g^o/ml.AJp}@oCS c*LK@1=[aj/om`' );
define( 'NONCE_SALT',       'L8H_~q.=LjV?4E,/IL^ ^xsa]hLqZ5Hc|4?{p(NqZVO;N0b6NzKSfljNf!]V0W#9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dy';

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
