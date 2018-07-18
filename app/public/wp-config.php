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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'wbn2iKPnvsmEeO8mA25ACVhIXdG4XxbB14W4sFY75n+a5d3dcgPf9tx1XvC7VVJdLh3OgYbdYpjOLvKXcJYXwA==');
define('SECURE_AUTH_KEY',  'DOJcGYRG9N+HGHfLeWXa3fTvJT1xTftR5xMVF6OdWP4UbyfiSap0u5dgrJYX9BtY2c393Gh0Xr+fIHlE+sNtZA==');
define('LOGGED_IN_KEY',    'FlNu1ZqJ7pCoF4Ql0lM3Seclw9vqkOqoPRpt0ZFjBq424Zlf0+7mu7Ko88sPm4+mKOAjOw2mpYggTXBixI/7dQ==');
define('NONCE_KEY',        'F7+ljtK+OV2YUruh+cX/2FAtFDiMsupNeeJFORJDiCS53MvSG5YmZq7YjtYC4gPaMSczL3X5g7ueN4GbM1+tjw==');
define('AUTH_SALT',        'flN7YIxKh70sebEqDF21P0X28a9NFewXSsxpjJmUgzpn26NRupQ93h7lBtEgZo75zvb9aujwcLDpyd2yWcILOA==');
define('SECURE_AUTH_SALT', 'mBJc/nWg35NYlWBOPTk7yoPkGP/BoHeSstyE+n9QAqbSbIn/e9no/neWxtbP7C4aso/Y0LD4tv9i+xgkaDjdvg==');
define('LOGGED_IN_SALT',   'YEOD9D6LgCkfrxyaaNYOb4Qk8Ar3XSqAnI/eDX1+jtHmwmSAnbvM9ws05syy48IEocpmrwkzPipkf8unLvDDFg==');
define('NONCE_SALT',       '2Icy2MjIgQdawNOfcGHtcO/fdShy8nFbI7J/zrBW1I5duVh1blENUr3zZ8NMQWk85zmEoNBpYY/ZdsT3krN2Ag==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
