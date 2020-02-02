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
define( 'DB_NAME', 'wptest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'helium' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.95PwgKgPpx1AR9,:xf/I|` s|S`Kly w*vk~keoDg[~~-a_jw3/g~?hT:se$GSz' );
define( 'SECURE_AUTH_KEY',  'wD$cl&Dj7`l&=WnYjeTph$6KLt~Mz)tdAWG:_Q:8{@*=M)XfhbL)}GqOpQ840yjx' );
define( 'LOGGED_IN_KEY',    '[KX*U>bx8@F6HPmIfV>^/JACIgWp0F8rVwc%dw|J-di.#d^$?4}g)82f,}`HRd`Z' );
define( 'NONCE_KEY',        'U324Gu_/COSPEW}~VxG6^$?[q7?ZrycIw&cSnzGlU,iVt%4BkvK3L!Tj~%Nm{IVN' );
define( 'AUTH_SALT',        '>GD^%8T~da}R,7eAq</zn!ZWoNZ##kw$ Ds 7XuU/V? py$.05ub5tZv<LexM`HZ' );
define( 'SECURE_AUTH_SALT', 'I8nH0p*,eNwn$MccxC0Mg~9 ?tWkNle+H,Xk:tL2*C_<xo3ienE&@ >-T$;9tg^R' );
define( 'LOGGED_IN_SALT',   'U(-[D.) ZA5|zwSPgX{`c8gYQgdb_bt)@|p<]fTk4sF(gWCh{*pESMCNK.<MF7rl' );
define( 'NONCE_SALT',       'OJBrBxNo4zVExL$4|Z_8cd0eyfLzTNpOSqS$j.H=e.5QxHGE&Rh5L%mm_oUM@H~^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
