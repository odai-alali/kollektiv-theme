<?php
/**
 * kollektiv Theme Customizer
 *
 * @package kollektiv
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function kollektiv_customize_register( $wp_customize ) {
	$wp_customize->remove_control('header_textcolor');

	$wp_customize->add_setting('header_background_color', [
		'default' => '#1e1e1e',
    'transport'   => 'refresh',
	]);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'header_background_color',
			[
				'label'        => 'Header Background Color',
				'section'    => 'colors',
				'settings'   => 'header_background_color',
			])
		);
}
add_action( 'customize_register', 'kollektiv_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function kollektiv_customize_preview_js() {
	wp_enqueue_script( 'kollektiv-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'kollektiv_customize_preview_js' );
