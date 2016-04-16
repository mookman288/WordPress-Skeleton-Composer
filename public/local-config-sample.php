<?php
	define('WP_LOCAL_DEV', false);
	define('DB_NAME', '');
	define('DB_USER', '');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
	define('WP_LOCAL_DEV', false);
	ini_set('display_errors', 0);
	define('WP_DEBUG_DISPLAY', false);

	// ==============================================================
	// Salts, for security
	// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
	// ==============================================================
	define('AUTH_KEY',         '');
	define('SECURE_AUTH_KEY',  '');
	define('LOGGED_IN_KEY',    '');
	define('NONCE_KEY',        '');
	define('AUTH_SALT',        '');
	define('SECURE_AUTH_SALT', '');
	define('LOGGED_IN_SALT',   '');
	define('NONCE_SALT',       '');
?>