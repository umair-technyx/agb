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
define( 'DB_NAME', 'agb' );

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
define( 'AUTH_KEY',         '>M$;o6Q4gh@0*C*[A /Uc&mPGw.m=$g!@P|g>BGCdgv; ={XKt=`X<?$9xMJ01 y' );
define( 'SECURE_AUTH_KEY',  'u/c6~.ozyjA[u*dke&DKxj^7[Uq.4E&~8{=<w~Tml$=ta-7^3EcG!RQVkCL cz)P' );
define( 'LOGGED_IN_KEY',    'p!los<cOke8y`o/n3^$NwUx8af.w/ikvOs9wMw3dt^wP?DVRRL#hz,1M5rXQ-S6@' );
define( 'NONCE_KEY',        '6||wzSQ+8oj<jYY*iN`5:%}3R64]-^,?[Yj@/%!_L?Ib=X2g}nFTO?Cnjfmx0>31' );
define( 'AUTH_SALT',        'x=Dqy(Z. GL1kTm$&tlal=[cn~^VjjpIm?O[MRgA#ecRgjs],fm[[&|]OwYlUqMe' );
define( 'SECURE_AUTH_SALT', 'X(WdBjA[8I1]PsEQB g$sjHZ:f%OGh6=y0N9sl!RQ(9-d[1uV!DO?I1BuBq&UNvq' );
define( 'LOGGED_IN_SALT',   'yUH=JrM_<C~{eiI5eIRYivR{9k=#<@^$/b)f&-(aKfdNaYY^m5CwW_$P45QV8d2v' );
define( 'NONCE_SALT',       '``G&-j23s;i$+3$+Vy K&cr/3 0;,.xn{YZA- pfLRD3HwA36vk8FP|I`$_SWq-Y' );

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
define( 'ALLOW_UNFILTERED_UPLOADS', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
