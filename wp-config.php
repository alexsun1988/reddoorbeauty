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
define('DB_NAME', 'reddoorbeauty');

/** MySQL database username */
define('DB_USER', 'alexsun');

/** MySQL database password */
define('DB_PASSWORD', 'sun!2016alex%0721');

/** MySQL hostname */
define('DB_HOST', '199.21.151.36:3306');

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
define('AUTH_KEY',         's1l_`=%SG&b8,._[( Y*Bz1i*Uo<ObI$wCjCIb}|YV3mFlwt9?lds6?52o&*(s|3');
define('SECURE_AUTH_KEY',  ';6.. $_@/`F!/H3DlG`k,&2<8(>6[J@K}YK}b@eQ>$i%Cc>`,%:A+~lmtOG-OyB]');
define('LOGGED_IN_KEY',    '%#7I|,9FApg:BrFp|J{=ov;_xs+bNqud4BaH?i`Gg=^8Aw{M`C#.D0Pe=APiGlgz');
define('NONCE_KEY',        '&Ch^%H7O-hnD&lUw@c{OWZ=t,|-7JxDWui??>X(L_7e&g7,)P$8%~4-?fsRXMAH@');
define('AUTH_SALT',        '+!OWT%Yvm&2$$tPDi%/r8-53G6O4}fm+D_WPzoiT5[(W,E1+j1VNY?JfjHz,O#>&');
define('SECURE_AUTH_SALT', 'TJ+Qk:4H&!Yqz^^^_fT1)x?MMNI|sSmH$aT^B949ua`B*2Jl5g-%SQ08eyH}c.e]');
define('LOGGED_IN_SALT',   '+;De90du#YiX&x2-ai5xeyNHdiwE*VT!U8yIxJ;vbdm*}# 3 iq)kGh($:}wDiHX');
define('NONCE_SALT',       'xP|dJrB4p3K b.r%pV;ZwGpt[2^Fx;:wfQ}nt5#+x=KBk4_QG@,~Etd.2Z@OXC m');

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
