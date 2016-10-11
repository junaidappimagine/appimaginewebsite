<?php

define('WP_MEMORY_LIMIT', '64M');

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
define('DB_NAME', 'appimagine');

/** MySQL database username */
define('DB_USER', 'b89d061053054f');

/** MySQL database password */
define('DB_PASSWORD', 'bece86b1');

/** MySQL hostname */
define('DB_HOST', 'ap-cdbr-azure-southeast-b.cloudapp.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm4svnrzqzacplecitqvswcnn55bkrgc5hpqsi9kajbnhqxiiyyjwehslni5h7kp2');
define('SECURE_AUTH_KEY',  'tpinxjbut6jrbjt57d6l1mrur8wn5kluwztwjhgulfuyrafnyfjlctzwuhdt3du4');
define('LOGGED_IN_KEY',    'japg9atjashpq76qaxmrx64r6ta0hlci0ye08ndzdbiufgxuqfanavr85wmpy0kg');
define('NONCE_KEY',        'ydir6rd5ljhya8wdyakarrq1tfkjbnmtb3sptrspfm6qedaqr55lkz3hzcwrsphk');
define('AUTH_SALT',        '4td1gdjdobn3jreoiqerrccbnn8gn5idvihenxmtxgv6ayz3jza00jmgs887wbij');
define('SECURE_AUTH_SALT', 'hyukowm3f70k21li0gw7zqmugjhneg69ypst97iffbjlxhy4u6qiuzb1qukgkxvp');
define('LOGGED_IN_SALT',   'pbddp31sigd9olkibtgxyd1ktrwg2zvnxoaup4okyzif9gx5hytkf1mqkbxc60os');
define('NONCE_SALT',       't161lbrrvy4d4ogdfrxvnyytbot9fzfrxwjjluy3xw1ty8qtucpso1efdaozopxh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
