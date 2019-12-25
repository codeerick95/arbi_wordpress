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
define( 'DB_NAME', 'arbi' );

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
define( 'AUTH_KEY',         'XB7atK1{>Gwr+TU+!~ll6NGg*mXER![J@U4ay3v}G; cSsb5,LqoSsNK53K)~Xtu' );
define( 'SECURE_AUTH_KEY',  'UpjZsk#2UKY4%(hg<?e9}AHUm-J*[JG~4AI.@^{XO}IGNqg^@^Skt`[kgGgc 1xs' );
define( 'LOGGED_IN_KEY',    'I<^,8:fMWuQFj(`fOpMs>6wmA-a$,}2jrpz~!k~Wx{d%51@&~|4w}O/Oa1CKAS}f' );
define( 'NONCE_KEY',        ' i@W-b5uNZ!fl^{qI6NeEy/xQh_w2)dxs=f=MYH&odv gDdl8dDYL*]&BjGHZJ6a' );
define( 'AUTH_SALT',        'weVEV1$@hGWt*zYSDrt8#W#a[@K~as31]@EQwjLxRhv2m8Jc>r>b?kY-A&Bx@{CC' );
define( 'SECURE_AUTH_SALT', '7A!NfGmAH78&UBHLobA@a3hE$g6ik:-aSf=ASN4kc)Qm 6x5v*lb74{2MwL3>6dU' );
define( 'LOGGED_IN_SALT',   '?pd%ruf87*9=EsSO88_Eb?PFX% (^N4N2}rw%?E]msX{- 3KHf4,&byH30Ip&hz0' );
define( 'NONCE_SALT',       '.xRc:t!Kg4b]BX$Jy_a>1{=a&vVy5%vNoB& `FUv?~U68!URZ##ddkf`GzVN;%Ib' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_arbi';

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
