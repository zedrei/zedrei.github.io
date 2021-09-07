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
define( 'DB_NAME', 'ombraqkg_wp947' );

/** MySQL database username */
define( 'DB_USER', 'ombraqkg_wp947' );

/** MySQL database password */
define( 'DB_PASSWORD', '4mS46p]a[e' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'aqbnaleajf5uwgnu1jbb2ck1fbaw3xc1jkfptymfjrst5wxq8xni1t2ezb38kojs' );
define( 'SECURE_AUTH_KEY',  'jlvnb3n3q1p0bddfkam8cljasfokaiz6xnn6u2esoccub6ocf4ezybysfv69sz3h' );
define( 'LOGGED_IN_KEY',    'dubnfeqlqreehfqp9dxvu15ppu5n5evnxodqbzvzvxlc8cy9qb0c30puoudevk6x' );
define( 'NONCE_KEY',        'bh8tx4srrvq47m9floamokfbqzj9p9a4h45kjdz15ewfnzwdrkbq5pimipn47ohw' );
define( 'AUTH_SALT',        '3jncqxhloejnzg5qxxvzftngamidxldqqnrw7qcco4cjwgojjhhiwnedsrwlrhgq' );
define( 'SECURE_AUTH_SALT', 'wrut5kmzrud6eizsztyrl7vuzbwtffxrn8sbxwksijoualga5nyiiecbolhhezwv' );
define( 'LOGGED_IN_SALT',   'zd7vpanlrj5d3rbep9js6qaqg10ajxsyhlzjecjv4sdfi6jgxhbtiptvwekaflag' );
define( 'NONCE_SALT',       '3ez5ymvxb7dledgnzzzorcrajhawdya8ztp8txfaawhm4jxzjyl49n2z3a1mdp72' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsg_';

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
