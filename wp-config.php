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
define( 'DB_NAME', 'wp_book' );

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
define( 'AUTH_KEY',         '-<I^SyO4vhJ?XG|%8Gq-slccOR!2goVs7)H2sF2>,$?JCC8v+#!}j{X{r<L$:F&q' );
define( 'SECURE_AUTH_KEY',  'ZQ7,~mo|Ai<n>Ifaay*]zQZP!FgQI0ys.)@l{/P[v-8Z7/#R;.v_B{]aEE?U?v9?' );
define( 'LOGGED_IN_KEY',    'W*HfPhg5F=vH9OtOyM=AQJb(K%MM,CfXS),rjuCIQ[Lh ~zr?TT&S#WvR*<(cYR5' );
define( 'NONCE_KEY',        '%Wjn:5nEd=x7hg&JPxx^LQSz$w-vKw`Z58<=Ngj8BrTRVt zNR5|OQ[3a:X{{un:' );
define( 'AUTH_SALT',        'YqEV to #o?R?%&N{;U57Lpu5U)@O2S,hfa~2QbfD#1yAilDW*Es3SEU_hZeCF5,' );
define( 'SECURE_AUTH_SALT', 'MNs#@-!jctY71y<>?dpkDk$M4@HSN#pDdGk@KO>lrhlt{MD@$1wqV+&u__Wizq< ' );
define( 'LOGGED_IN_SALT',   ']+j5J5]K3in=go[>yesuqO`?r>uGm>wse%VDj3lm?@dD4aJFp@FO7:S&RZ7]VJZ[' );
define( 'NONCE_SALT',       'f<iWM9Ybcaq}1Mp,A9Fb.cnhv*ynos,t/7g<b}7/1N8ozNkgvi]!m6hz;daj9<O4' );

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
