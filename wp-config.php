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
define('DB_NAME', 'mydb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345678');

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
define('AUTH_KEY',         'J(AW81a?u(P3wl0p.6#NC]3kqEC:e]<.Q|C|9do4]<|]n/C5J(2k>a@?p{@TmQ5?');
define('SECURE_AUTH_KEY',  ';EwN}N4AJmF{m2Y6YnR}oiBeKyD&@/7z|HR%r]jUMDuv*):gM[qS~lNEv[BL06Rt');
define('LOGGED_IN_KEY',    '.(`F<!vJ1T(R_/lwc(8|l}me$OU6X^rV:=qz`ou;J79yR4M#QS~@1Op0y!<osmtP');
define('NONCE_KEY',        '*3p:JA#5%pZs.McyIkfyv<Bj/:X89)HA7C0A5_[k6SRaw=?f>V/?/k_pO#W)l]6/');
define('AUTH_SALT',        ';WAb&Z<_h<gR/5R;LDiU)|:fWg<L%:J[I*0b;17 vJevP9<}6hOe{Dx~Va7oM6Yv');
define('SECURE_AUTH_SALT', 'KS`6o(=oQ;1gBSCN(Gp!U}.+BKPm(S*(e&`I$`5p$PO<1tXihwOxNvo,?_G|)kU6');
define('LOGGED_IN_SALT',   '%sw6bG6xLEROADNCwCg)`OCt~ fH&Hp%e{~}DzIe8nRiMbub%L;;dfZ%ena:e*d,');
define('NONCE_SALT',       'zzG79!^;1%Dt|Pv~TcnNWg;8oo)S&h(|E*>RfoTwN9eVfX%YQB0i&v&-,(P/>D7b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tb_';

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
