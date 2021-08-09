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
define( 'DB_NAME', 'unaux_28778921_967' );

/** MySQL database username */
define( 'DB_USER', '28778921_2' );

/** MySQL database password */
define( 'DB_PASSWORD', '26S[DaKp@7' );

/** MySQL hostname */
define( 'DB_HOST', 'sql302.byetcluster.com' );

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
define( 'AUTH_KEY',         '8eycrlxd71w5urb7dcevrhgp4qtbfxopxebp6egdyf02occ3w6pfv1bqo3aorsbm' );
define( 'SECURE_AUTH_KEY',  'pq2blkl7vmtmq0qjjp0oimess635fecndkfkvcg7vgzvhhf5i8vblmpmclgejaeb' );
define( 'LOGGED_IN_KEY',    'i5bvw3yuycuovfzotisiu1okl50fdsbw1tkczxewerb5ylvjuxertywyfgrg803n' );
define( 'NONCE_KEY',        '17otguwvulcfiyn024slkp3iunfsjr2ygfcpwnmgcqb4a56w7z5ba7ecdrak5duv' );
define( 'AUTH_SALT',        'f1mshi1rcnl4izlsxjs0twbquzmcifu1kpypkidu2wthydkqqqde6ud6x0gmxccn' );
define( 'SECURE_AUTH_SALT', 'puuoyatqn8hynx0rz83j0t8xywgaohot4rb8jigsieppuv3qz8rrrg4khovjtjrj' );
define( 'LOGGED_IN_SALT',   'icreylcfed9enqsllgiviueraipoiwnuuwt4mqkkebtszb5oqrwcjcjco4nz7e1n' );
define( 'NONCE_SALT',       't9aqzreqevuepwdigcgdtt6aubspvx2mruagp5ghr1hd7dqljzwwrrjmjjqbucxe' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpr4_';

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
