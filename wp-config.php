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
define( 'DB_NAME', 'dbs202590' );

/** MySQL database username */
define( 'DB_USER', 'dbu187112' );

/** MySQL database password */
define( 'DB_PASSWORD', 'UaZ!rLhZ9aXCgdw' );

/** MySQL hostname */
define( 'DB_HOST', 'db5000207694.hosting-data.io' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/ZWdhTLxfbQqANRFp3miMtNlP41NKPwtoMThfQF8J9rNHR92iD0a9CsT+rX4FX7CNr00TGKRpfgJ2ncJjJxlmw==');
define('SECURE_AUTH_KEY',  'jfZsyt14MNbDWMinI8sbkKkJK2Gm6/aAx1FBqOHESbDNLA9z2SBRHgZjhwPoHWC66gAHKJ8OBrYM63RckcvmWg==');
define('LOGGED_IN_KEY',    'IXdJS6Zw8ALhDZ2UCNryqSRwuEndTrwUwFY43GoBSvaFPj0EszCvcity5/Cf2utXEzSGnI6efoblqHFwuNAyxQ==');
define('NONCE_KEY',        '8zjwa3cpXOPcZ+tXRtcybS0boEc7ALasaGGPIk9vg1RVFrcZkcJQC2BIwGmuf85F+svCYlogCw+3cz3eU4Zhyw==');
define('AUTH_SALT',        'nmLt5c+w/dOoOuX9gWHTY9wVTgIsSh8OgCjXwXAZaJkbDinLXNbeFdtgnwzng3eebkUPdcmFBzJT/AoyEB6aMg==');
define('SECURE_AUTH_SALT', 'Oxbf4VGDK0eV0fy+cB5T75JQ6UPbNDkkPjNzet0C0ikWk80Z9u4eVC97u2OYEv78jYMPNCokugDL+25BanulrA==');
define('LOGGED_IN_SALT',   '9jsfLLpeO30GPIL+y28ytoWo8nFYh+rSUoeHHhSwZOfvvPshE7/F/T5PHtaY8z8+LnEja3TydTqgCG5u5qPYIQ==');
define('NONCE_SALT',       'rBkXYN6eg1fM0QXaf2lhpwnwkzNf/fvB642h/A+PSsixnBgjByld/xBL74jq43jWi9CxTKkGNBKJgFU0ikfhUQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
