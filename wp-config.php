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
define( 'DB_NAME', 'dnk' );

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
define( 'AUTH_KEY',         'PCn.l.YAZ6$&01:Ix{5KZu@~D`ca;(u7K?-[2]$A}+T8>:`(U,Z/_8Ok+>|ftJ2X' );
define( 'SECURE_AUTH_KEY',  'fU25U/kEhE~6o6SY@%#qZk-QQv9e%CwDH~;`vG#C**M`H@}Z]CStq_=oYmrLo4lM' );
define( 'LOGGED_IN_KEY',    'zF%cz%Q`Sd^dH~ohcg`.U7W~6WuA`%zqx%<|kQT3@bCH9T7]hxYuA7yav;k5bl7q' );
define( 'NONCE_KEY',        '^GQ<VasPkw_$O*j)AtNA<ul&qxe;4hTw!SQ ~p#ilEQTn^{/~f_>;fbdg.BpsE8z' );
define( 'AUTH_SALT',        'plkc[gl_>*e+EMOUT0S2aV{CTZO,`T  pi+#hUs)iV#<*.q{<tSm;R|>VnDt+3m/' );
define( 'SECURE_AUTH_SALT', 'k-2hs#KEWi~7`}BjPLr5ln1{xFv#kkgi#K$H`${$a~6M|ft{pG6R7/&@EG70J:Cv' );
define( 'LOGGED_IN_SALT',   'tKv{+<|CvfF iN)Ek4x/N)jC^o)Rnla.3!^15, ;y4=^l.YgZ 7(TG?WakjPQi/z' );
define( 'NONCE_SALT',       '|OqV81!@Yz%;GY`xK)E+4FV0wI7ckvC+-sk_?0ttGZj;&d8*<mv2?X`fllO!Wjf*' );

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
