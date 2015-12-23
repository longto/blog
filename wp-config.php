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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456a@');

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
define('AUTH_KEY',         '#W/T]oTY)*zzr-#7[IY0HZFg|F9T-M#wo7HsUiBmuAK&o~-9(jK7n;>i[IK&pzho');
define('SECURE_AUTH_KEY',  '}ulD:JF$t*;8&C:grWiZ=;uLd8:gU3jAhG93/H]Qy$u0HrVbn+lZo1M!6O-f-<-w');
define('LOGGED_IN_KEY',    'KmHjK9TID+}!fx2$BL|7jO/=9s&JKm4vN+|;xH@/k=Xg(x2>Cs:*iGd+j-c<0M<y');
define('NONCE_KEY',        'nPI]&Zn,V[S_0Ztu)d|y<YB/TAS@uP Po0)X_77)CjmPwr/|7)2>.;`=QtkWsf::');
define('AUTH_SALT',        'n?|KPy:cwy`,xGSQaM$:6U7nE3+k5ICQh|ITV#;>h.uP9^Q5dq6$Y}i*M>Ax<B.Z');
define('SECURE_AUTH_SALT', '-n9|mbcBg6_T4]mb;GQ/(Ga1Mrw:{,|fw_7*-l3~Q|qVLaS&U_Hs>/{LJ:qo|BN5');
define('LOGGED_IN_SALT',   ':Opz;+Cxo2miPg@YTR}D<I!Z;*| {UH&<X`<Ta)9YR.#M._yq00Uap*PC7Saa!Y1');
define('NONCE_SALT',       'Gl(|2Jx-Ja4R]`N+C&e+dsfPBzY]>,-Bz;aOm*g[,cd@+m!jBx#8_<K*)5+}+!Rr');

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
