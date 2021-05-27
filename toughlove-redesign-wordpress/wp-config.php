<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'toughlove-redesign' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ']]_E7H)k6g~@o0A(d?V1J FY&9tAIE bcY(KeX,~;7En;_o[L/;ZgzDFZb;QmP$ ' );
define( 'SECURE_AUTH_KEY',  '.c8K]7VQq?@XFR~&(Km~>=yRmK>|Y_locE*?%rZUckN&TZi z~4:.9^d;MG#%WeN' );
define( 'LOGGED_IN_KEY',    '?AW8Ns:{)nwFS)]]6<w)Cbn6)>7lX0?h7H//61Cg dAyr.cg9gM7R|4Q$kD7]I=w' );
define( 'NONCE_KEY',        'zt&.~ay}GT#QCB4w{LlAkgejg*80hW2R):QST/z,nRR{PeT0uq!bU45o[hZ ZkTI' );
define( 'AUTH_SALT',        'aXr^(ahq+D((N!#*O_:ZM2TR=e+9~uG_[:]?6jPk#e+vJ--{5VbK8hnLvG,B$ 1q' );
define( 'SECURE_AUTH_SALT', 'c#-,P-LD#1$Pb0GK/?1)+hkXfb ?G}/vO7QZ^dV!A8naXG&fzGE_vH@^;iY~!ym*' );
define( 'LOGGED_IN_SALT',   ')N<-9hakC5a4+8Ic-+Clr=boP!/lo*yD!ge%@ihg^(>>.gcbvg~aFl(FTs*2<sI@' );
define( 'NONCE_SALT',       '!=CnZps-GY.CDyZ,tz6BC)r0Kjy)%aZrtVPCVBG!&I)42+:]O/9OWwt`VI5< Z5;' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
