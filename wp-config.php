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
define('DB_NAME', 'kraktuho_plaksy');

/** MySQL database username */
define('DB_USER', 'kraktuho_plaksy');

/** MySQL database password */
define('DB_PASSWORD', 'marshall');

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
define('AUTH_KEY',         '~4<zw{5ej$Yfkvmgss|1~tNb|di_JiD{LPs1^NvxV0cVZByi4,q+f5FgrryFZ<`B');
define('SECURE_AUTH_KEY',  'iuX]=<u%C7*%eP,`Womo?*0iT Mz~+v9)&3L}P|[V<+JPfv+1pzqq>,;lkphF.KK');
define('LOGGED_IN_KEY',    '+z|8Yrd5h+9Lvo:/yG[GmV5:wfzy!iFTiSJIBX?wOeS*<~K?+a!  QBbdy+yo@qe');
define('NONCE_KEY',        'lKEO+1NcK`I(S| Y!x&g,!hU_Z7-g?*SU&0M}`&[Vw^,=XnNz/+#%,hB3Ko/Qcum');
define('AUTH_SALT',        ':4oN8|&<s_:U*tSjm,6rCk*DG^?f+YJkbYLwMfxbn&~{@JQ>6dmwb*er4j1WXGVz');
define('SECURE_AUTH_SALT', '`1(5u&NCk8yEpL]N<Ro6#KEq^TfjPMrOo+!)->R|$]Y~t%V2c#rk1vyjX<cy}b0g');
define('LOGGED_IN_SALT',   'oc?(}bB{{juo4H-[=L=;k(boZ,IvW^MhJtxw#HcJ5lE3ohhCf<#b2Wd D02FE2XR');
define('NONCE_SALT',       '}B$07*(w :29tZN=i*zu( H+*{^+MCgkC;KOKX~rU8]3%e DN(M]fR^0=wlT(Wr7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'ru_RU');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
// define( 'WP_DEBUG', true );
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
