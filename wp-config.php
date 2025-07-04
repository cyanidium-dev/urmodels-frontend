<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'urmodels_wp_lrbk0' );

/** Database username */
define( 'DB_USER', 'urmodels_wp_huf68' );

/** Database password */
define( 'DB_PASSWORD', 'BH&6mEIQ@~^7e4W?' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', '[/__FI0r&O-AM%~X&5XI|1q1RFJZ-E+KbKREpHJx2V_96C7~%ytd[98ghnsFZ0+m');
define('SECURE_AUTH_KEY', '[_8p%[]DTe#jq2Rw5J9~+J!IShK23%nA2dM2BiVpC%aV&N(42TjSE&U)32B_A3Q4');
define('LOGGED_IN_KEY', '5;(4/M4ndwd]O5o:438+e/lV3YXFhElYm3*4+s0@:)S~2f3|w&WW)[WL7~yM-+|!');
define('NONCE_KEY', '5x+24J/b75::Y#a8F91|/1fv0Djwmwx3/;c83kUn:b:K5m65346q97~8A+7(!8G2');
define('AUTH_SALT', 'JD_*LGsRf0b]mi8790s8uEUR/CS*KX1LdS5@w:41XtfD8yb#94M5Er5xl)p2sz~#');
define('SECURE_AUTH_SALT', '%8-!kRZvm[8c%2T9k[)5KebG4Jp/Xem1|o6vj7ij**Pi0)B+kA-7!rj4d%_/2uSL');
define('LOGGED_IN_SALT', 'nRb9Qz4;WUhI1F7:nameR8j%6g2F58O*g2c!b0*Y*I4G7S%4/UMesR5pShN3D!0a');
define('NONCE_SALT', 'b[UU3h1R74-PNZ/a|J7~:(4bV4rAjCe)h6*)FY/1W32iQ:+4A9yWd/YE1b[v-i/1');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'S2J5nC3K_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
