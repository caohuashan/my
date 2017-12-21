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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '=L2eP@-? eohUc&>^ak_vbe!ZtCO*U[u K#<ZnU}A*.5frGx 2H^M_09&ZR:KKaH');
define('SECURE_AUTH_KEY',  '}v<8}UQRuUbig)sGlUq;uPu9Vm H+UJ}JD0Ub_}%`B:#~R5q<TJ>:CD8CQz?zQ^a');
define('LOGGED_IN_KEY',    'g5@m<Xh>a7GGiAG~iPlI 65mL%Cl*[^kj5|A@1bXG^$,N20Iqx=zfw!@Bv`k*]$v');
define('NONCE_KEY',        'p6q/D_l,NIykn3Iop:rv<z^X?1LM>s.MRp|E*bM9&{d,SAvY!gR3)H}YRZb<&n;*');
define('AUTH_SALT',        'fN(V:ltLBj*y2_fw$Qx`}CV>Qs-rCp5g eB$,[2v%avosL7u? If;N%etDj,Cv^I');
define('SECURE_AUTH_SALT', 'dN3LOb#q1QX>~94wha$%%(4dDFy0:@LIa.xB{IqW),:OmHf6-9o[:l2ZeaRj<1(p');
define('LOGGED_IN_SALT',   'Pw.fs|]kV[Mb`m$vktA_qz=k5{<Dld4NBavTUvp^)B%`-UONl.:D9iQuwM;mE*)Q');
define('NONCE_SALT',       'kLZ994sQ7mbh$-pTF6gYU4v#ATt`7K~Lvv9Iy>bIfv@>FG(lN!qJYfYwj8L#|6x0');

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
