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
define( 'DB_NAME', 'plescia' );

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
define( 'AUTH_KEY',         'M33x5y<L[DrXQ3)N`b.3$_*38YKis,s2_N=%y`Igo8rTgj?1>f,>}JLBPIl_$=vO' );
define( 'SECURE_AUTH_KEY',  'p@/0H~_9z}7@p=P|,1#M`kN]^6?E%M:w$~lS&}+8V0,)p=mQf.^mjbr1~pAHk<o<' );
define( 'LOGGED_IN_KEY',    'b&7TgI.PyK{%YI)Hf*ZDYT/.h)h;/;Ckz][|w<JY00Utu2c(8M~3/h:Yw(^IBc%{' );
define( 'NONCE_KEY',        '0.VVC39FGfx1C#5QzxjC]XyNziM/XRJ,SzxGFIril0M6Zga~Lzs(QvoD[DD;xO.@' );
define( 'AUTH_SALT',        's38~`iM*p_cc|1 %`MQO3$CkU7[5eS*nEc8+*/_8S2JQuY[e46 EMbfV@>4.a$Jx' );
define( 'SECURE_AUTH_SALT', 'YJlftOqJdT,>]MH?65POTb@gc fWOv;i6T25}KT1y-}!tMdfaVt4P!)A<w+]<CeO' );
define( 'LOGGED_IN_SALT',   '#cx:5[uZ>(ld%6h7D38.F!#puG#{-UL!l6v^w5Ks-bg_G}>9]Q~(1YtV(v(NZl4+' );
define( 'NONCE_SALT',       'r v!;{BKwt1%/F5D4_J*?.94X$s[uKyfM_? cU?Y> Feapi1:p35=V/pC!6% M>m' );

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
