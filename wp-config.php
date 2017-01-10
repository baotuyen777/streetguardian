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
define('DB_NAME', 'streetguardian');

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
define('AUTH_KEY',         '.-xdFgR<>~1r!Xj>y]d.RLQ5ps+Ch;_,MiFuXgfJ 4cQ&oY/-t I#- w^o(6;<#I');
define('SECURE_AUTH_KEY',  '.b:rNpC`[!!)<S_x@4~bcUwQkb/d2+EA5.vj&t6G+]T$u~h3O:qbtgp>6e_@Ls)3');
define('LOGGED_IN_KEY',    'GCjcP3o*4]`uH9G*9lQ*`MmF~{:p&SngT=b@,fzb$(L2+AzcH=tzUaB#H&-4aCH/');
define('NONCE_KEY',        'A]`bL^J$c8e8XU:VksxhNKViD/WHy-IyU1zLax&zkE#BPJE{OR`lULS1M;RHS4!`');
define('AUTH_SALT',        'HW^)p Q[vL.^_uWb[8{)1snjfiN*CjW4o=&@TSUxc=#x$@{W-/OGXpm/gDCzsDOW');
define('SECURE_AUTH_SALT', '<K-.srL-J#k!|sklSHV&uP#~N0[fa>,8rVd14VzDmi@~XW>4Q_4<-ru4MLQgaFC9');
define('LOGGED_IN_SALT',   '?rH4TgIkTEr:U6.Y`6&P[H$Jp_>FK#eJjDAJiMkpg&?4R42JQYX*_?bME2YbH,t-');
define('NONCE_SALT',       'KY}DhZBJ-=ON:(ABlPxU38AJzx>kmtZ=e&jE$;[h{|UFE=QIwA@AL-~#W Z-_Pe+');

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
