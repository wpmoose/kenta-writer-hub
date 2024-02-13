<?php
/**
 * Theme Customizer
 *
 * @package Kenta Writer Hub
 */

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'kenta_writer_hub_return_yes' ) ) {
	function kenta_writer_hub_return_yes() {
		return 'yes';
	}
}

if ( ! function_exists( 'kenta_writer_hub_return_no' ) ) {
	function kenta_writer_hub_return_no() {
		return 'no';
	}
}

//
//  Card style
//
if ( ! function_exists( 'kenta_writer_hub_card_preset' ) ) {
	function kenta_writer_hub_card_preset() {
		return 'inner-shadow-bordered';
	}
}
add_filter( 'kenta_card_style_preset_default_value', 'kenta_writer_hub_card_preset' );
add_filter( 'kenta_store_card_style_preset_default_value', 'kenta_writer_hub_card_preset' );
add_filter( 'kenta_global_sidebar_widgets-style_default_value', 'kenta_writer_hub_card_preset' );

//
// Sidebar
//
add_filter( 'kenta_archive_sidebar_section_default_value', 'kenta_writer_hub_return_yes' );

//
// Archive entry
//
if ( ! function_exists( 'kenta_writer_hub_archive_columns' ) ) {
	function kenta_writer_hub_archive_columns() {
		return [
			'desktop' => 1,
			'tablet'  => 1,
			'mobile'  => 1,
		];
	}
}
add_filter( 'kenta_archive_columns_default_value', 'kenta_writer_hub_archive_columns' );

if ( ! function_exists( 'kenta_writer_hub_entry_thumbnail_size' ) ) {
	function kenta_writer_hub_entry_thumbnail_size() {
		return 'large';
	}
}
add_filter( 'kenta_entry_thumbnail_size_default_value', 'kenta_writer_hub_entry_thumbnail_size' );

if ( ! function_exists( 'kenta_writer_hub_entry_thumbnail_height' ) ) {
	function kenta_writer_hub_entry_thumbnail_height() {
		return '360px';
	}
}
add_filter( 'kenta_entry_thumbnail_height_default_value', 'kenta_writer_hub_entry_thumbnail_height' );

//
// Default color preset
//

if ( ! function_exists( 'kenta_writer_hub_default_color_presets' ) ) {
	function kenta_writer_hub_default_color_presets() {
		return 'kenta-writer-hub';
	}
}
add_filter( 'kenta_color_palettes_default_value', 'kenta_writer_hub_default_color_presets' );

if ( ! function_exists( 'kenta_writer_hub_color_presets' ) ) {
	function kenta_writer_hub_color_presets( $presets ) {
		$presets['kenta-writer-hub'] = array(
			'kenta-primary-color'  => '#09898f',
			'kenta-primary-active' => '#066575',
			'kenta-accent-color'   => '#12181d',
			'kenta-accent-active'  => '#1d2a31',
			'kenta-base-300'       => '#e2e8f0',
			'kenta-base-200'       => '#f1f5f9',
			'kenta-base-100'       => '#f8fafc',
			'kenta-base-color'     => '#ffffff',
		);

		return $presets;
	}
}
add_filter( 'kenta_filter_color_presets', 'kenta_writer_hub_color_presets' );

//
// Dark color preset
//
if ( ! function_exists( 'kenta_writer_hub_dark_base_color' ) ) {
	function kenta_writer_hub_dark_base_color() {
		return [
			'300'     => '#303d53',
			'200'     => '#1d2a31',
			'100'     => '#12181d',
			'default' => '#1d2a31',
		];
	}
}
add_filter( 'kenta_dark_base_color_default_value', 'kenta_writer_hub_dark_base_color' );

if ( ! function_exists( 'kenta_writer_hub_dark_accent_color' ) ) {
	function kenta_writer_hub_dark_accent_color() {
		return [
			'default' => '#fefefe',
			'active'  => '#c2c3c8',
		];
	}
}
add_filter( 'kenta_dark_accent_color_default_value', 'kenta_writer_hub_dark_accent_color' );

//
// Global typography
//
if ( ! function_exists( 'kenta_writer_hub_global_typography' ) ) {
	function kenta_writer_hub_global_typography() {
		return [
			'family'     => 'artifika',
			'fontSize'   => [
				'desktop' => '18px',
				'tablet'  => '__INITIAL_VALUE__',
				'mobile'  => '__INITIAL_VALUE__'
			],
			'variant'    => '400',
			'lineHeight' => '1',
		];
	}
}
add_filter( 'kenta_site_global_typography_default_value', 'kenta_writer_hub_global_typography' );

//
// Preloader
//
if ( ! function_exists( 'kenta_writer_hub_preloader_preset' ) ) {
	function kenta_writer_hub_preloader_preset() {
		return 'preset-4';
	}
}
add_filter( 'kenta_preloader_preset_default_value', 'kenta_writer_hub_preloader_preset' );

if ( ! function_exists( 'kenta_writer_hub_form_style' ) ) {
	function kenta_writer_hub_form_style() {
		return 'modern';
	}
}
add_filter( 'kenta_content_form_style_default_value', 'kenta_writer_hub_form_style' );

//
// Header offcanvas
//
if ( ! function_exists( 'kenta_writer_hub_canvas_drawer_placement' ) ) {
	function kenta_writer_hub_canvas_drawer_placement() {
		return 'left';
	}
}
add_filter( 'kenta_canvas_drawer_placement_default_value', 'kenta_writer_hub_canvas_drawer_placement' );

//
// Header top row
//

if ( ! function_exists( 'kenta_writer_hub_header_top_row_elements' ) ) {
	function kenta_writer_hub_header_top_row_elements() {
		return [
			'desktop' => [
				[
					'elements' => [ 'logo' ],
					'settings' => [ 'width' => '100%', 'justify-content' => 'center' ]
				],
			],
			'mobile'  => [
				[
					'elements' => [ 'logo' ],
					'settings' => [ 'width' => '100%', 'justify-content' => 'center' ]
				],
			],
		];
	}
}
add_filter( 'kenta_header_top_row_default_value', 'kenta_writer_hub_header_top_row_elements' );

if ( ! function_exists( 'kenta_writer_hub_header_top_row_height' ) ) {
	function kenta_writer_hub_header_top_row_height() {
		return '160px';
	}
}
add_filter( 'kenta_header_top_bar_row_min_height_default_value', 'kenta_writer_hub_header_top_row_height' );

//
// Header primary navbar
//
if ( ! function_exists( 'kenta_writer_hub_header_primary_row_elements' ) ) {
	function kenta_writer_hub_header_primary_row_elements() {
		return [
			'desktop' => [
				[
					'elements' => [ 'trigger' ],
					'settings' => [ 'width' => '20%', 'justify-content' => 'flex-start' ]
				],
				[
					'elements' => [ 'menu-1' ],
					'settings' => [ 'width' => '60%', 'justify-content' => 'center' ]
				],
				[
					'elements' => [ 'socials', 'theme-switch', 'search' ],
					'settings' => [ 'width' => '20%', 'justify-content' => 'flex-end' ]
				],
			],
			'mobile'  => [
				[
					'elements' => [ 'trigger' ],
					'settings' => [ 'width' => '20%', 'justify-content' => 'flex-start' ]
				],
				[
					'elements' => [ 'socials' ],
					'settings' => [ 'width' => '60%', 'justify-content' => 'center' ]
				],
				[
					'elements' => [ 'theme-switch', 'search' ],
					'settings' => [ 'width' => '20%', 'justify-content' => 'flex-end' ]
				],
			],
		];
	}
}
add_filter( 'kenta_header_primary_row_default_value', 'kenta_writer_hub_header_primary_row_elements' );

if ( ! function_exists( 'kenta_writer_hub_header_primary_row_height' ) ) {
	function kenta_writer_hub_header_primary_row_height() {
		return '60px';
	}
}
add_filter( 'kenta_header_primary_navbar_row_min_height_default_value', 'kenta_writer_hub_header_primary_row_height' );

if ( ! function_exists( 'kenta_writer_hub_header_primary_row_border_bottom' ) ) {
	function kenta_writer_hub_header_primary_row_border_bottom() {
		return [
			'width' => 3,
			'style' => 'solid',
			'color' => 'var(--kenta-primary-color)',
		];
	}
}
add_filter( 'kenta_header_primary_navbar_row_border_bottom_default_value', 'kenta_writer_hub_header_primary_row_border_bottom' );

//
// Header bottom row
//

if ( ! function_exists( 'kenta_writer_hub_header_bottom_row_elements' ) ) {
	function kenta_writer_hub_header_bottom_row_elements() {
		return [
			'desktop' => [
				[
					'elements' => [ 'breadcrumbs' ],
					'settings' => [ 'width' => '100%', 'justify-content' => 'left' ]
				],
			],
			'mobile'  => [
				[
					'elements' => [ 'breadcrumbs' ],
					'settings' => [ 'width' => '100%', 'justify-content' => 'left' ]
				],
			],
		];
	}
}
add_filter( 'kenta_header_bottom_row_default_value', 'kenta_writer_hub_header_bottom_row_elements' );

if ( ! function_exists( 'kenta_writer_hub_header_bottom_row_height' ) ) {
	function kenta_writer_hub_header_bottom_row_height() {
		return '64px';
	}
}
add_filter( 'kenta_header_bottom_row_row_min_height_default_value', 'kenta_writer_hub_header_bottom_row_height' );

//
// Particles effect
//
add_filter( 'kenta_header_top_bar_row_enable_particles_default_value', 'kenta_writer_hub_return_yes' );

if ( ! function_exists( 'kenta_writer_hub_header_primary_navbar_particle_preset' ) ) {
	function kenta_writer_hub_header_primary_navbar_particle_preset() {
		return 'gather';
	}
}
add_filter( 'kenta_header_top_bar_row_particle_preset_default_value', 'kenta_writer_hub_header_primary_navbar_particle_preset' );

if ( ! function_exists( 'kenta_writer_hub_header_primary_navbar_particle_detect_on' ) ) {
	function kenta_writer_hub_header_primary_navbar_particle_detect_on() {
		return 'window';
	}
}
add_filter( 'kenta_header_top_bar_row_particle_detect_on_default_value', 'kenta_writer_hub_header_primary_navbar_particle_detect_on' );

//
// Override header colors
//

if ( ! function_exists( 'kenta_writer_hub_reverse_accent_color' ) ) {
	function kenta_writer_hub_reverse_accent_color() {
		return [
			'default' => '#ffffff',
			'active'  => 'rgba(255,255,255,0.7)',
		];
	}
}
add_filter( 'kenta_header_accent_color_default_value', 'kenta_writer_hub_reverse_accent_color' );
add_filter( 'kenta_footer_accent_color_default_value', 'kenta_writer_hub_reverse_accent_color' );

if ( ! function_exists( 'kenta_writer_hub_reverse_base_color' ) ) {
	function kenta_writer_hub_reverse_base_color() {
		return [
			'default' => '#181f28',
			'100'     => '#252528',
			'200'     => '#4c5356',
			'300'     => '#6d7779',
		];
	}
}
add_filter( 'kenta_header_base_color_default_value', 'kenta_writer_hub_reverse_base_color' );
add_filter( 'kenta_footer_base_color_default_value', 'kenta_writer_hub_reverse_base_color' );

//
// Header elements
//

// socials element
if ( ! function_exists( 'kenta_writer_hub_header_socials_icons_color_type' ) ) {
	function kenta_writer_hub_header_socials_icons_color_type() {
		return 'custom';
	}
}
add_filter( 'kenta_header_el_socials_icons_color_type_default_value', 'kenta_writer_hub_header_socials_icons_color_type' );

// logo element
if ( ! function_exists( 'kenta_writer_hub_header_logo_title_typography' ) ) {
	function kenta_writer_hub_header_logo_title_typography() {
		return [
			'family'        => 'rye',
			'fontSize'      => '28px',
			'variant'       => '400',
			'lineHeight'    => '2',
			'textTransform' => 'uppercase',
		];
	}
}
add_filter( 'kenta_header_el_logo_site_title_typography_default_value', 'kenta_writer_hub_header_logo_title_typography' );

if ( ! function_exists( 'kenta_writer_hub_header_logo_alignment' ) ) {
	function kenta_writer_hub_header_logo_alignment() {
		return 'center';
	}
}
add_filter( 'kenta_header_el_logo_content_alignment_default_value', 'kenta_writer_hub_header_logo_alignment' );

add_filter( 'kenta_header_el_logo_enable_site_tagline_default_value', 'kenta_writer_hub_return_yes' );

// menu element
if ( ! function_exists( 'kenta_writer_hub_header_menu_top_level_height' ) ) {
	function kenta_writer_hub_header_menu_top_level_height() {
		return '100%';
	}
}
add_filter( 'kenta_header_el_menu_1_top_level_height_default_value', 'kenta_writer_hub_header_menu_top_level_height' );

//
// Footer bottom row
//
if ( ! function_exists( 'kenta_writer_hub_footer_bottom_row_border_top' ) ) {
	function kenta_writer_hub_footer_bottom_row_border_top() {
		return [
			'width' => 3,
			'style' => 'solid',
			'color' => 'var(--kenta-primary-color)',
		];
	}
}
add_filter( 'kenta_footer_bottom_row_border_top_default_value', 'kenta_writer_hub_footer_bottom_row_border_top' );
