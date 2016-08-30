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
define('DB_NAME', 'rrdatabase');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'V.n+;2U36vs~5)${KLMlu_feJ!xgp8Z&e}Uw*yF3/MIm5!n!koNBu:35`KC +9+K');
define('SECURE_AUTH_KEY',  '!|Xw#.^;#F3FxhCnI3`CCz7_WA?V$%}Mf)?8}?7YHkr|U+3-]+lJw}#Asb-xIm(t');
define('LOGGED_IN_KEY',    'x^~v*aKc^X>MhrN-smy[_pt0!nKm1rA4:xl,mj{ iQnV[sKWu(Jc{f0iK5Wc0k@y');
define('NONCE_KEY',        'l@07BqZz)xx/zww@&V-PUHe>SidaypGv0O~nrTsOHWodXG,ER4wBTsa;O%p~dQ&f');
define('AUTH_SALT',        '#KTk*eFui(Bh+jr:_D~>R_G^iTL+Vy5wxUlZI+$fVj]~`(=mpa^WIK$ILHiQ}Pzs');
define('SECURE_AUTH_SALT', '7<o?H)j~PtcFE)iLOo(K_O2qJjQ9/h<Xmy,)}4-~HnrMyZW>:x<2{4`=6%=)dq|-');
define('LOGGED_IN_SALT',   '0Y@/lPb(FVqquP)Id{#!$W9%%pu9^8OayGH.|e6xLL4U?V{D54d;T%31R$(BOFyV');
define('NONCE_SALT',       'HQrL:/#_e]yz~D6ti4Ghl[kKeCKGV3kxhfP8s}orw-&M``bpKWdNH=,w)^PBiGC[');

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
