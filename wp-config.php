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
define( 'DB_NAME', 'dbproyectos' );

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
define( 'AUTH_KEY',         'H04_;?E..rKY)9)OFQo>eQ(Eh_EO)-BE0nf6lBzKw0<$UK)Dr+Too]_B>=7|QS4j' );
define( 'SECURE_AUTH_KEY',  'AhSCeq#sOEV[E!n{-YUlP0W%Y8^pla}-a@d{)CBi|@b8y]>Q<hBW*zf_4J3c%i-4' );
define( 'LOGGED_IN_KEY',    'syuctQ0z51_p`Z*o!p]K}>K1QXpapr3g1Q~~f*i56N5yzTJb.&x>|]_l_|w@D4=f' );
define( 'NONCE_KEY',        '7WM *)rwP+u~[x3]h~}%J)}?mxO<D]<k~MBtyg8K# W@IXy9WRwN#N9^]Vy+Hhz[' );
define( 'AUTH_SALT',        '7Dgpwik%/ML/Fk5U{)`:A09~88P^>)B][):;hrqXl@9KdU?AVn8v)h5_j[yDlomF' );
define( 'SECURE_AUTH_SALT', ',?V#%#kM++;ApJye+?N`qE:{..Jb<C#xM.e8Sj~Bii7.~KQc~-Z[D#}|]gjF_Pt]' );
define( 'LOGGED_IN_SALT',   'Kd({8oOF25C2=rouXJ+*Oy6rq[}?O?$UKjx8}5eTLewUTs;]^oS1U+`=#gL+OXC6' );
define( 'NONCE_SALT',       '@gCR){.]XT3yk~;:Ujy[{3SC_+-.pE> UxBK[:@<eAtT{j^Ww,;(*@W@p~^YDvan' );

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
