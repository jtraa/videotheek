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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'hc12nC~iST %!ap}NNL! $00UO_a]67%aYcylzpPy.6HL9T,UGxY 1i&<@@4F[i_' );
define( 'SECURE_AUTH_KEY',  'rPcZJYQh-)q_{N`/wQq9m:[Zyl^f[@[Jc!9oz_n//c#QP.$s7: kQXs1B1=Lg~/B' );
define( 'LOGGED_IN_KEY',    'vu@ch c./ekM1+yS2`!@gRAfM-ey4nPU}%+ld$K8R(V-Guu%A@oba9X7uIdtIkwS' );
define( 'NONCE_KEY',        'zM`,cUY(BoSQw==[.ZjzQi/c(8Qv<4@{Qi:V]4.BMr+TrYB^_8H2J`a{;S&~e&L3' );
define( 'AUTH_SALT',        'V0t|+<ItOGtAU>C$azH~u>HYeY>zGgVV8ooa?_Ue&t@n`&ffd4g `<yJN.iY@87g' );
define( 'SECURE_AUTH_SALT', '|bL)* C^Sr+&`Vgu)Lr9]^N%Ih;.g^9O6R8@>Hp=rg%e7[H9gtI.N^d0q{$A<jPg' );
define( 'LOGGED_IN_SALT',   '{>q?:Qz>4q4/mLi^$1gk:4mWyNG-x#ZU1%7GIhfeJDo)$|hvmVm.tuz)n7}nX3nL' );
define( 'NONCE_SALT',       'B)Z1dc-P{3&KYhDX!-A=bfUcXYoreoPY@{]u9{Qy:*N`;~{34.q{M~[AH+Hfb[M-' );

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
