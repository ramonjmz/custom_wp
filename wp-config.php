<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'advantur_mazz');

/** MySQL database username */
define('DB_USER', 'advantur_Mazz');

/** MySQL database password */
define('DB_PASSWORD', 'G0t1Te3T9ds3');

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
define('AUTH_KEY',         'GNR!_Fst!Um|<o|n0rkEY _9EiRpu&}!t,@wku)((6Ef5~pyaVZJ)gd --#p-fjH');
define('SECURE_AUTH_KEY',  'I=Fvk$-2`u5u)!d<9;dlm;O%9QHRUo&xx`~J6EycgQQYKIb7qo0)&Z0fs$IoTL1p');
define('LOGGED_IN_KEY',    'M%3u$gf|bu/VO+(i/wHg#>#(9X[JlXTU-,FU{Kf_JpPHRS5h}HvVLO _Aeki>RS0');
define('NONCE_KEY',        '4!-K?|TjGCSZ]`W4]4q79C&LB6+Y>w-:g`_U<).-|xoI2uL[Om7x=7tF}2D`NqWs');
define('AUTH_SALT',        'R_<@Z:i&h4d2+JVva&0k-hXIpnWoro7!p]6[,pd**$dvObcl!c0!Rq<At#32u9hY');
define('SECURE_AUTH_SALT', 'F;$<-%nI:@0zmMgTov,D!Ck-{c!#zmASaQ1b*r7yYP+dJe=&$TaW>B2. @7l+;j#');
define('LOGGED_IN_SALT',   '6&WFe`5u)uI)oAui$l$W`?pSI1:u!>JcB)!k6|dUWXkN6*M+/|)<_v^ZpE1<rFE`');
define('NONCE_SALT',       'Ic9Q}aS?ydV,;ksbglt`qrx|qQ+bpQ%,T0Z/Bx,_6y|$cFpYvn28I+|FY<@&2II{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lgnjp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);
define('WP_HOME','http://mazzclean.com');
define('WP_SITEURL','http://mazzclean.com');