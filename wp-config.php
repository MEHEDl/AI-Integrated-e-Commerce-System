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
define( 'DB_NAME', 'eccentri_wp' );

/** MySQL database username */
define( 'DB_USER', 'eccentri_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'X@..!wpS0!ex4805' );

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
define( 'AUTH_KEY',         '2ssxookh1yqfwxis9jnpdmxuot4sckp3cgynwxbnshceiho943olwzonaajmcyf9' );
define( 'SECURE_AUTH_KEY',  'mov8eih1ahn68kfh8gd8mj2akmsh7rfiwsospzadb1ugtsnhimbckjddvaknesel' );
define( 'LOGGED_IN_KEY',    '11njuhrycczhu1u5ydxea9uq4tubd2mhcmq8mf3kturxv3ls5brz43e8b9mozyrx' );
define( 'NONCE_KEY',        'bpigqs85fz9ebyg7itz7cnj0vma5ebyldsjclcm2i0czz7jixkvdi26hn7qeqge7' );
define( 'AUTH_SALT',        'zlcem7wvwrfmnyde9a0dmhgfslxz3dcghylubsc0s922r3odgsevagnwyocpwwuu' );
define( 'SECURE_AUTH_SALT', '1v4kqzd1qrfqenfl78aefzzttb54fmhcdpnxokkxgye3cyuf4o6myqogyp7oxlzo' );
define( 'LOGGED_IN_SALT',   'mhvfjwq2vakivt3dmfadfx9vwef60hsrerwbgjg2zpwrxjtztgq89aw5oheecfmc' );
define( 'NONCE_SALT',       'l1m01q4gzbo4pslky4gm6pz4tmou9qy8xnnxgim6r7pxihzgf6sqloyjtjkigzcx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpr0_';

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
