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
define('DB_NAME', 'db_wpgit');

/** MySQL database username */
define('DB_USER', 'nandni1');

/** MySQL database password */
define('DB_PASSWORD', 'nandni123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('WP_ALLOW_MULTISITE',1);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/gitnew/wordpressDemo/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define('SUBSITE', 'on');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mPI7mxBihn(Q25pBT+kre,5UqE6QV^37bBV0GF~v;F/R&`(-~pxab_dKj9W!UfI[');
define('SECURE_AUTH_KEY',  'FVe;%a4KmSDr@P{Tw(wTB@([@;lDOT2+@=I9;1CX~T8~Kfxma3}r-n*(i(_hiTi2');
define('LOGGED_IN_KEY',    'F+sSG<+Ri%q!0Fq9r3-45{Nn&jVq8`+KL4]NMB-N<;M2%lq|2p /`{A/NBJ^x s.');
define('NONCE_KEY',        'qKkb01/%4h8x!pP{!>gql&u;SUQySH.9p7*xW~~.og]o`pTYTot(z!:1Ip$l_3`V');
define('AUTH_SALT',        'D >N%^hXDUc%ev*Q=JfGP/gg@RO!3T!! N`86GUV6A#WmY(tG3ow%lxA3G,pjgF7');
define('SECURE_AUTH_SALT', '_@pq!>J7>n]d4-&pD8;|nkTfKx+_{L]jXs~[+)A.{,-fhRW,2LqtdNu.Ve|CT<xJ');
define('LOGGED_IN_SALT',   'FUAy[*nXKrZP4/Nm@p:j?=d<C5+j6+Aabo.O.p`T$;z`G;f{=4-!L,1#$0l~L;d4');
define('NONCE_SALT',       'S#0OT9ho.17qM$/=b2Ssdr6|u`#SvqV~VEep@w3m5MFR8>J>% A@W;)WuCYan_5,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
