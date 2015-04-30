<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'zopi');

/** MySQL database username */
define('DB_USER', 'zopi');

/** MySQL database password */
define('DB_PASSWORD', 'zopi');

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
define('AUTH_KEY',         '9Ls*%21?=}=6w0POTQkz5NAO>_dwkdX4eKq-H%&d#J0@#BC8G$gt]sri~-XPbT8)');
define('SECURE_AUTH_KEY',  'Vl<}8xC,h~MgF/{rrcH[?*o^+}qS/>&w7h I#5g-D6mzTaB<t[gmTFdO`Z[0$A J');
define('LOGGED_IN_KEY',    '*SiYkVgka/?q#^JnV/;CdkNW6H/l29:-2):|X3 CB{u7q]h HA8f|PVn}H/^6W[}');
define('NONCE_KEY',        '1VmGC(nJ9t}fH?!uOJf| !CM`}E[+f>^Ag&7hDAYL_S[|%gJaifz0,#G>0s-nU9O');
define('AUTH_SALT',        'U|3{$Q2w_&2yIu<TNc|T~CbOz.|+}hAr<w*MiD (PIt|G/vJ[*<#=S!1Fv9VQ9hX');
define('SECURE_AUTH_SALT', 'GGzsQJ7 ?g1>:OPYc.5#6`m9cV_@8f>28r_EAe.`bq,,;ki6Cw4RWR4X~31?t]Nv');
define('LOGGED_IN_SALT',   ';lw#G$)m+n5>U@+.K{-Vbmnym*ge&wZ1K;P7iEkM@>]l`2;E:=BkTVi%)VmujU;1');
define('NONCE_SALT',       'b3Z!Nx}^kG=rHU~mS>+9SSP^x?&zm {e40zFR6@ULZ@f@B1smo3<Q9KhQ;GW}d06');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
