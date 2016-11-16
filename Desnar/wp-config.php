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
define('DB_NAME', 'desner_wordpress');

/** MySQL database username */
define('DB_USER', 'commex_crm');

/** MySQL database password */
define('DB_PASSWORD', 'crm%$#@!123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[%dcLE9#IBK]a`rjDC3o.upbed|zeP|&o(E23USxoP<1aOZNqR<FwmL@R>An<&ve');
define('SECURE_AUTH_KEY',  'RA`?zm[Nqw:J1p7m2>&aX*cnqYQci<qdA+7b@[19M?<+()8m{L=bVdWS0!-A!Cyi');
define('LOGGED_IN_KEY',    'cZ9F(X^vjMLBw1(QN__@TtM@VeXYs[6CgExmhIDMA*]Z=7K[1K}I=m`sQcZqE0Hs');
define('NONCE_KEY',        'sTSa%`DO{1*Y6;6%0La)LcxtR0VNEp7{u~/h7Re%&gIGJ*}=5jn5g^c=SS9Fjf+1');
define('AUTH_SALT',        '>pZy.nj{#G+|#krVB(&YEPB`S3lfrJCBdEh5=.6YO!6Pr4Y(,oD+Ms08v+w!t+<F');
define('SECURE_AUTH_SALT', '1}ev-5JLU4<&=,Bf#5uzKL?)w-%nJ[$9d~vB-%ef*YNkr7W;Bjp.}Vp3$51eQ$Qm');
define('LOGGED_IN_SALT',   'iGBC%/%2:2g=_bkIKe?V9^E#o}|Ms?zQj&?~2D331%l0cGJ=haJp|1?gZ^v<`-Al');
define('NONCE_SALT',       'BV*geX w*X(5{9)r})X^t9H1AL9uKz`4cG_NSLjUOo!KV92(yOsgUke}O~.QAfEv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
