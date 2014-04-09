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
define('DB_NAME', 'cedarroof');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '0bJ)XWuXYTXCRHPb{P+ -oP#4w3A;.}uePuDXwXo- P=hJ*k~;#T7& i&-~Wv2ih');
define('SECURE_AUTH_KEY',  '9a>G[r@sQ9Ekq+/sp-z+goty*|X+T;%$WH^wh4gk5rf/}ZcS#3Y<N)2P?x7AqI{?');
define('LOGGED_IN_KEY',    'UJu&mJl+-+xrKM<.+ 6QsZ+w0pu]3l|>|>Dyg)BSZZ%:2/hgJ]+L:QUTZ8Ur.N!?');
define('NONCE_KEY',        '&>*>1#aF#<#-CSTH1K!fx-|lv<ggSAZgb%o@ZK{g3n,g?^.a`fYJhNY,{+O[|$~A');
define('AUTH_SALT',        'Jl,>T Rn;+v/&@F.9}E zb>|0n2}0+irf*9X/$b|[DG.syF>h/0Nk{xZSt7=3XHG');
define('SECURE_AUTH_SALT', ':&}5~T1_AHw~QXGx%eh5 _1|k8`d^%{-+Y5B4Eh,i?4w_aM.8&6?_Qmq;fp91|)w');
define('LOGGED_IN_SALT',   '3_j$g[-]=8{.Ivp:lpFd vrF5:5|?Jtns+>:ic>GnjAr4V=I$QKzW0+DdNqnHHDw');
define('NONCE_SALT',       'Tq2m#W|mago~=uS:eP#S&:Su=@_nf6SH|L16G[nXX8rKA+g,{1U4lA`xa=,c*P<>');

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
