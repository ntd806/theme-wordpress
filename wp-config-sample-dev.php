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
define( 'DB_NAME', 'furniture' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '-da*xa Ya|~r(%pJ`#ly6;}M>p7Hou+<E#bHLOJXeBZA-OEFjNNhNGfEs_I}3.pF');
define('SECURE_AUTH_KEY',  '{j%Cl%Udah|5A=wqr7@HF,/IO9op_c`Np-Ji$WpQT%Y;Pr8M``uU ?xrJZ7EP-+f');
define('LOGGED_IN_KEY',    '6+.b[vjW37Ooj^AXN-QJi qks=R-W(7yml*~f<RSU$p-o)BVb;`Nv+]zw6n/9e1S');
define('NONCE_KEY',        'b&rP*-B$*E -upc{d(=aCy(7 Bnn?8|ae=Nr2},#&99Lt|>4nU/-zSbxzW o`tEM');
define('AUTH_SALT',        'q0>76Tvw*Ja+e3b$9+-q4bD?ez0S@6S4fL:X`]bg|R9]T2@H U&q.E=$;xPK|B_N');
define('SECURE_AUTH_SALT', 'nU~T8_+Ub.9CzxX`_-{0=lepTf|k8=IVO;b_5Q?%_ly6Mm[5G||I~-tzn!M|[?YA');
define('LOGGED_IN_SALT',   '+-:v^!-gjzZ-_D31n^~364OX_gAO#A^W`4+aYVOR bsW8mlz?X[xDIyteLf)6s/8');
define('NONCE_SALT',       'r/)H?;8`e/1(q28>rY7i&~jY2fM)9k>s-GG!Qr7 Q.C<+U-QVfc,+>X4h.<&-9&z');
define('FS_METHOD','direct');

//define( 'WP_HOME', 'http://example.com' );
//define( 'WP_SITEURL', 'http://example.com' );
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
