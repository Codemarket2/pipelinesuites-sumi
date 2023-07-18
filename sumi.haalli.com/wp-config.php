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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/dh_ic6q7z/sumi.haalli.com/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'sumi_haalli_com');

/** MySQL database username */
define('DB_USER', 'sumihaallicom');

/** MySQL database password */
define('DB_PASSWORD', 'r8zYJ!jN');

/** MySQL hostname */
define('DB_HOST', 'mysql.sumi.haalli.com');

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
define('AUTH_KEY',         'D:Lywir)Md&WN:M&e&Vewam*w$jO1?;~Z/uRwXsuaZ#sk4o6k+BHrqR;qS%Ogo8"');
define('SECURE_AUTH_KEY',  'lzD43x&LFxZK`sqMaWp4K+s968Dy5q!FbI@D4gHuuC(JaqWCnWEFlGJ;W+ILb;ts');
define('LOGGED_IN_KEY',    '^uD%)cPP+As6!|uHI&BI4:CTPbnK~%5l5CiY?iBYRSdnnp1@2I)6E%E3i)E!rcrD');
define('NONCE_KEY',        'wp&WI4z+W1BxoMrQz(D*IyE2TJ(;S8&8oME)S|NgIcG#xy$ke/fy((gLpzi1~umf');
define('AUTH_SALT',        ')$fxJK~iv(iz$uGM%!BV?36H(sN/Jv7ZZiSa(ZI*QWR|G+Av5CBO"ud3_1hFjfWq');
define('SECURE_AUTH_SALT', 'LIrx`Sm|vs8MSefuWjIFd5K8S$GzI|fPwbmFrWA&f&QLk(5Bo3AQUwMpH%|ymR:;');
define('LOGGED_IN_SALT',   'jix4*T4WsHjri3ESyd6&:FNO^5@M_iVjh"JdXqp@&5cqAH(!/9d|3;2_MRFx%|z_');
define('NONCE_SALT',       '$OAW1h~5Phy9k`JjemmNKY3`ari|B2)Ynoz2CRSvU5|pjHDk_?P(KV8q^EZ2ri@u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_5cipva_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (isset($_SERVER['HTTP_HOST']) && preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
        define('JETPACK_STAGING_MODE', true);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
