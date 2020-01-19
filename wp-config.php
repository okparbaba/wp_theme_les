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
define( 'DB_NAME', 'thtu' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '*i0~q:}iZCQ3U D[{mnnggOA=3cXmx_/Y&ceCk$D=;&Wq-ke/nVJss6GyVlDR8?L' );
define( 'SECURE_AUTH_KEY',  'C@Nopi6dRj##NIgKGt$uu$SM-i`wj%w_0OOxJ,}Q(^NKk?pLsL$Fef_k=m ? /j:' );
define( 'LOGGED_IN_KEY',    '|n9,xbIJ_V_aaE}oZW0C=B0$zksUt9.K0;!L@[&OWcH2|Y TT&{-3)Wl7ie<vt_T' );
define( 'NONCE_KEY',        '@H#14-(B<BYr){<o@zRE1AMKQlCrC~3@n@pEn&(_Gfr6A= ^%A6h O{wGv9iYlI4' );
define( 'AUTH_SALT',        '[taDy*u;4;PFZy%ohmg u+KLsWx<6<];Z1/]zNEnI#}_TJKweHx7IHQ^#[e@>@hw' );
define( 'SECURE_AUTH_SALT', ',|zbZJdd/JylM=U@2~`K|3!Lm#QtEGEqM96>GM>;GT9K OL.{Z%U8EAuI?! $T//' );
define( 'LOGGED_IN_SALT',   'i-Nrno!H#l;n0Oq/xtop&+-`o }^n5(q]?*8w1X1%e9#NIGeJ{jBi6Oy4)bYx|eC' );
define( 'NONCE_SALT',       '$azcv%aN]^#+j_96+:,-1R}B:KBfTX+_}g%R{3!73J^9B-fFsScqs9[@!^J{^Xuy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpcrs_';

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
