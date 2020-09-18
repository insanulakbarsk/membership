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
define( 'DB_NAME', 'membership' );

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
define( 'AUTH_KEY',         'w%P3%9kLI3}J7iGrk7WJn-_!WBDg=Hm?qDO {mv~+{OB}(X:{})*O-vsNF55ptAj' );
define( 'SECURE_AUTH_KEY',  'pL?N,#CEq# zqAXu9?*A6A]J31NjMFy`;#{^e5|S0AIa:<&#4yM%D=+9L$wrN-n*' );
define( 'LOGGED_IN_KEY',    '&sOn@;{n]$C,[$klMkn[[1-prxyrzwPRDdxdqQd9,hLgLJ`$Dv!`xIT,ai)f`u?N' );
define( 'NONCE_KEY',        '[8 :c_0W>1(lm20@<Xv+@V[/!%h5D1^I gER=nm7Qw1;fR[&$6{^+xF|@<] BRg=' );
define( 'AUTH_SALT',        '*n[16dk`R<(J!f{QTKXKFpUr qB)$Z*;s6_=$jnnc)N+><VX{tc>,u@#}~KR[u8l' );
define( 'SECURE_AUTH_SALT', ',hCxj5m+&5k413Q{A6UD.]mqy*5&2M|AqeZE<~[T&d^6tqg;xn<a^PLg{ ;o@>fZ' );
define( 'LOGGED_IN_SALT',   ',IQc|QIMV`F$A_,{>EtYcMS[K9_KNp]}mM`gcO6m>*D[hXW,iIid$%0b7UUV|~~p' );
define( 'NONCE_SALT',       'Klyag.Dic(,hzraRC^FX[hmif>Y[1WwRb2UD})nAcQpwN>iCCZ(iwD7sA2rjC?,c' );

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
