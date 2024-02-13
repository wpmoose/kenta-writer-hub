<?php
/**
 * Theme functions
 *
 * @package Kenta Writer Hub
 */

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'KENTA_WRITER_HUB_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'KENTA_WRITER_HUB_VERSION', '1.0.0' );
}

if ( ! defined( 'KENTA_WRITER_HUB_PATH' ) ) {
	define( 'KENTA_WRITER_HUB_PATH', trailingslashit( get_stylesheet_directory() ) );
}

if ( ! defined( 'KENTA_WRITER_HUB_URL' ) ) {
	define( 'KENTA_WRITER_HUB_URL', trailingslashit( get_stylesheet_directory_uri() ) );
}

//
// One click demo import
//
if ( ! function_exists( 'kenta_writer_hub_demo_slug' ) ) {
	function kenta_writer_hub_demo_slug() {
		return '';
	}
}
add_filter( 'kenta_welcome_demo_slug', 'kenta_writer_hub_demo_slug' );

if ( ! function_exists( 'kenta_writer_hub_demo_screenshot' ) ) {
	function kenta_writer_hub_demo_screenshot() {
		return '';
	}
}
add_filter( 'kenta_welcome_demo_screenshot', 'kenta_writer_hub_demo_screenshot' );

// Customizer settings hook
require_once KENTA_WRITER_HUB_PATH . 'customizer.php';
