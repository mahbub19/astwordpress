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
define('DB_NAME', 'wp_one');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'I)I@n^Y ^$vP4F):*;(DjiR37LlN{<C_}*GyJ`sYh-s(kLO6ABYT]r?CrR@ ;qFk');
define('SECURE_AUTH_KEY',  '-eY[dVN{nGRfkJR S]yawk>tT)7Urkn#cb8:_f.C@j9Oyg9K_sE^[iz> <ldp7bG');
define('LOGGED_IN_KEY',    'zLCU51o3;z/Gm5=C9!fdruT1WwVr(%</!x6 ?8o]KPDj3s^?{!N}W>Od7Uam4|Xa');
define('NONCE_KEY',        'hg`f&=14Sb)*C@Pd:=9.)A!J7.4mtNraeC)4x~ac?/]pXc{:9J;_guRQ5Ax<CWCc');
define('AUTH_SALT',        ']E+|k&F&p:3Fi?;f1zW@e<Ln]}g>PY sV%-3On>_ew:si Qf*dy@;?aY>7t03C ;');
define('SECURE_AUTH_SALT', 'R;B6xn++PP=4n6~I?JmM8c Hsk(zMammJ9W/Zu6&[I9*<qIy!i1RdktPCZOC>Arv');
define('LOGGED_IN_SALT',   '!QME9bUa2)59m2M<O)*8(;`LN=V,k+L(3^w^[=u3dZ&^jt.c24VA;XQq8k-ShZdF');
define('NONCE_SALT',       'Q J{,Z?eKp?mU<{)o(AEsYxtt+GEotI?TAS|Fvk*ed;WlUAco4Y/<E=8N/1-bRqo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'intern_';

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
