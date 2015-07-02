<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'alliedjet');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '# t8Oa3l*:,-<fN0?Mrfcxk| S,SZY,]7|2`+vp`7IQbh6VD2R?[|@BAz|vH8+(Q');
define('SECURE_AUTH_KEY',  '@|,8$uKs$!x?HV|YhuPX]AH}32#Exaa])zlrvH_ds5]B: d-+N*L6iF_=$$>i,:s');
define('LOGGED_IN_KEY',    ':pS-UAjry>D~HULtb+2ggvh`X0}>>?B5sR?hkLq5vfUU8=x416OgUISpKuxwUCty');
define('NONCE_KEY',        ';BiJrs%LH!-S|-j|+EIM5x TO$cu=k@UyE0eA=71+!@u^(20Z`~.p^&ok}J+5ym#');
define('AUTH_SALT',        'A*<D?OYggSN$:|[2ZB+T_8t}mYG9hIFhqsU)QrD|S+E&e+,a4-e-%pr$T%|Pkq?[');
define('SECURE_AUTH_SALT', 'YE#;+BtpOJQq-yRy-(@vjU+|c/c z ,[N8T sp]+;p/d+#l)7EHtVkEU%m*ra-N2');
define('LOGGED_IN_SALT',   '(Qqqr^eij;V+jFzDKxuJqqo 4W#g%rO_9r%i%}F9;--<T1`=9~M.9gGax5{y#_}c');
define('NONCE_SALT',       'tE5#||ZYn=T8BQ;MND:(3#aAi.8cJ5dvq+QC~jtaa~6r`|XwWSXL$]8*qkXYKhm7');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aji_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
