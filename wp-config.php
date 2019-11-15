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
define('DB_NAME', 'cms_kazan_1115');

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
define('AUTH_KEY',         'mXo-#-=2p/*q:P7XTnHgpfUv*KsUaEA26SlA4qs=p?yF{)r^3h5tli_dE-n}kaA{');
define('SECURE_AUTH_KEY',  '*y%Hn|TMiEBo7Nxst; y{YyYM 2}Q_AsAz.`D%.69k4 G1=2G{#gc!:i1.r}DkwE');
define('LOGGED_IN_KEY',    ']ledVoKHq@H7.F7P0Mu|.0nK/vV1wuu5%,`)|5#GzW97] I^*ElW7j:jw^ QF4w_');
define('NONCE_KEY',        '1jcNvY`%1J0]UiQG9$TC>_3JR<-Mhr}./ E}* L4vmP@KFMwIuxg~4CDJ%SJhCL7');
define('AUTH_SALT',        '&LwRf(h3|+8L}/jMp$x&#mc&9qY5 Cgma1Y+bx2I&D#_`T9,rnl5!oM)Ir|F|NM4');
define('SECURE_AUTH_SALT', 'q``uP7oE79SoWy+xkigJ}Bau``1D_2zSDiL4h_*]|BNKa/@|oqB{(pm=qI2Ck5QY');
define('LOGGED_IN_SALT',   'f0(aTgnP%OJ9|VSCex#~-v 02cF-C_Oj0X8R}d}f+bFc7k!_6}9;N>kuWE#@*}Ca');
define('NONCE_SALT',       '5^jj=jzi(p4Y;L}(}dbx_O+:5}:`%U|34?Z<}0A3~lF9^N:a1c@rQ/:Bb7[t)3h^');

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
