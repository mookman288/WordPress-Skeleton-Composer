<?php
	// ===================================================
	// Load database info and local development parameters
	// ===================================================
	if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
		include( dirname( __FILE__ ) . '/local-config.php' );
	}

	// ========================
	// Custom Content Directory
	// ========================
	define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
	define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );

	// ================================================
	// You almost certainly do not want to change these
	// ================================================
	define( 'DB_CHARSET', 'utf8' );
	define( 'DB_COLLATE', '' );

	// ==============================================================
	// Table prefix
	// Change this if you have multiple installs in the same database
	// ==============================================================
	$table_prefix  = 'wp_';

	// ================================
	// Language
	// Leave blank for American English
	// ================================
	define( 'WPLANG', '' );

	// =========================
	// Disable automatic updates
	// =========================
	define( 'AUTOMATIC_UPDATER_DISABLED', false );

	// =================================================================
	// Debug mode
	// Debugging? Enable these. Can also enable them in local-config.php
	// =================================================================
	// define( 'SAVEQUERIES', true );
	// define( 'WP_DEBUG', true );

	// ======================================
	// Load a Memcached config if we have one
	// ======================================
	if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
		$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

	// ===================
	// Bootstrap WordPress
	// ===================
	define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp/');
	if ( !defined( 'ABSPATH' ) )
		define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
	require_once( ABSPATH . 'wp-settings.php' );
?>