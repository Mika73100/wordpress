<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define('DB_NAME', 'mikadeu936');

/** MySQL database username */
define('DB_USER', 'mikadeu936');

/** MySQL database password */
define('DB_PASSWORD', 'MikaBardu73100');

/** MySQL hostname */
define('DB_HOST', 'mikadeu936.mysql.db:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'ZgNzNiDanp9yIeSyhOBb1PzmKxR2iQC+A49ZT2hXnyQn6kjvVeU9UQu+/0KJ');
define('SECURE_AUTH_KEY',  '5NoI0axeABn3NApgeUnJrP35zsrBh/SIfbt8OWId8hBqAZ7PX8mUnCh9pVx9');
define('LOGGED_IN_KEY',    'MxdRPpfEPMQMzRRqdELU/1c3tDOoRBAGOKv2rMAJIh8oFsAwmV1G1yeW9AVp');
define('NONCE_KEY',        'T0V+RbtCR4mGa/R9w1phmOdVcIm6QW+aXjXsNtB6cyAZVTPENz5ka//Jl0zd');
define('AUTH_SALT',        'IqRlrHguANynxz11PdowhU7R7iMzfotA/v5xJMFhE7Ci1CCOTkzKXNMYsoNS');
define('SECURE_AUTH_SALT', 't+q03TcgC3rY46ofx8BopmCERJopSSUTWwe2vOAWH7EhxLi41Axu9vIX85xx');
define('LOGGED_IN_SALT',   'x4EBO0EhsdZMPpoFQCk+ujZOgHCOLqqunvGS1/oQ10BukR8HwqK0+5mwuEZQ');
define('NONCE_SALT',       'Cv5C5efh8VUKAds2gxbXhdIMz8OwRQuaqRhGOyitKHQhPY0m2m1Nv2RhzMru');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod769_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
