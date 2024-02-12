<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pruebatres_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm4~{H`0<bJ)p45]`rth,)7]q/#4xK2wbcYP`-GcdU~(Cs2{pS|C6wRN~Vg!V6|SM' );
define( 'SECURE_AUTH_KEY',  'iml(v|4{VVs*1w%3hNu^mA2_5#)I]S@GQQ/6Sd_Fnp#K.rk5z42g]0;d)kvdYRBr' );
define( 'LOGGED_IN_KEY',    'V~U)s7[BR:Fq<E7wzB)FitE=({u]U<Ne!#v.v%8;?i]N[!(5L[{sEx[>_jIhHbgC' );
define( 'NONCE_KEY',        '5UIMFl6yZh}POubmZlUhoJf8<?X}[=G&by`wtATovP}3.fh@H|)FOdEoD2JafS=U' );
define( 'AUTH_SALT',        ')dn}WK 9NN!%FXpj, -1%w+ 5<REV@{^CA=&Qw~R!W&mVk[Po=%<00{nS_-pj&bd' );
define( 'SECURE_AUTH_SALT', 'vz OC2/JE+G)N%dcAc>Jl}]^;<(}P>YcKm@Ztw{DTzyzJ=-kZJMG(1)dBeVY7SC(' );
define( 'LOGGED_IN_SALT',   'ikxRh5f:EsI`m7wI_kMRB<YLvyF{i!,71wyIi;-a3Y{J..Hhs_i3-ZG-wRvi/!d7' );
define( 'NONCE_SALT',       '*}SjA3j_#+;D&Y~tL:7z`73r}N#=7!A6.+Z6;-|I=(l_X|TDAeXQ4a_;IqcR%w&m' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
