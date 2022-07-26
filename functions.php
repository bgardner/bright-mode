<?php
/**
 * This file adds functions to the Bright Mode WordPress theme.
 *
 * @package Bright Mode
 * @author  Brian Gardner
 * @license GNU General Public License v2 or later
 * @link    https://briangardner.com/
 */

if ( ! function_exists( 'bright_mode_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function bright_mode_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'bright-mode', get_template_directory() . '/languages' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./style.css',
			)
		);

		// Disable loading core block inline styles.
		add_filter( 'should_load_separate_core_block_assets', '__return_false' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'bright_mode_setup' );

// Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'bright_mode_enqueue_style_sheet' );
function bright_mode_enqueue_style_sheet() {

	wp_enqueue_style( 'bright-mode', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

}

/**
 * Register block styles.
 *
 * @since 1.0
 */
function bright_mode_register_block_styles() {

	$block_styles = array(
		'core/button'         => array(
			'shadow-base' => __( 'Shadow Base', 'bright-mode' ),
			'shadow-main' => __( 'Shadow Main', 'bright-mode' ),
		),
		'core/group'           => array(
			'shadow'       => __( 'Shadow', 'bright-mode' ),
			'shadow-solid' => __( 'Shadow Solid', 'bright-mode' ),
			'full-height'     => __( 'Full-height', 'bright-mode' ),
		),
		'core/heading'         => array(
			'gradient-primary-secondary'  => __( 'Gradient #1', 'bright-mode' ),
			'gradient-secondary-tertiary' => __( 'Gradient #2', 'bright-mode' ),
			'gradient-tertiary-primary'   => __( 'Gradient #3', 'bright-mode' ),
			'gradient'                    => __( 'Gradient #4', 'bright-mode' ),
		),
		'core/image'           => array(
			'shadow'       => __( 'Shadow', 'bright-mode' ),
			'shadow-solid' => __( 'Shadow Solid', 'bright-mode' ),
		),
		'core/list'            => array(
			'no-disc' => __( 'No Disc', 'bright-mode' ),
		),
		'core/navigation-link' => array(
			'outline' => __( 'Outline', 'bright-mode' ),
		),
		'core/quote'           => array(
			'underline-primary-secondary'  => __( 'Underline #1', 'bright-mode' ),
			'underline-secondary-tertiary' => __( 'Underline #2', 'bright-mode' ),
			'underline-tertiary-primary'   => __( 'Underline #3', 'bright-mode' ),
			'underline'                    => __( 'Underline #4', 'bright-mode' ),
		),
		'core/social-links'    => array(
			'border-base' => __( 'Border Base', 'bright-mode' ),
			'border-main' => __( 'Border Main', 'bright-mode' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'bright_mode_register_block_styles' );

/**
 * Registers block categories, and type.
 *
 * @since 1.0
 */
function bright_mode_register_block_pattern_categories() {

	/* Functionality specific to the Block Pattern Explorer plugin. */
	if ( function_exists( 'register_block_pattern_category_type' ) ) {
		register_block_pattern_category_type( 'bright-mode', array( 'label' => __( 'Bright Mode', 'bright-mode' ) ) );
	}

	$block_pattern_categories = array(
		'bright-mode-footer'       => array(
			'label'         => __( 'Footer', 'bright-mode' ),
			'categoryTypes' => array( 'bright-mode' ),
		),
		'bright-mode-general'      => array(
			'label'         => __( 'General', 'bright-mode' ),
			'categoryTypes' => array( 'bright-mode' ),
		),
		'bright-mode-header'       => array(
			'label'         => __( 'Header', 'bright-mode' ),
			'categoryTypes' => array( 'bright-mode' ),
		),
		'bright-mode-link-page'    => array(
			'label'         => __( 'Link Page', 'bright-mode' ),
			'categoryTypes' => array( 'bright-mode' ),
		),
		'bright-mode-testimonials' => array(
			'label'         => __( 'Testimonials', 'bright-mode' ),
			'categoryTypes' => array( 'bright-mode' ),
		),
		'bright-mode-query'        => array(
			'label'         => __( 'Query', 'bright-mode' ),
			'categoryTypes' => array( 'bright-mode' ),
		),
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', 'bright_mode_register_block_pattern_categories', 9 );

// Add class to pages and single posts with no featued image.
add_filter( 'body_class', 'bright_mode_single_body_class' );
function bright_mode_single_body_class( $classes ) {

	global $post;
 
	if ( is_singular() & !has_post_thumbnail() ) {  
		$classes[] = 'no-featured-image';
	}                

	return $classes;

}
