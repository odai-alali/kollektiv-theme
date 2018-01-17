<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package kollektiv
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses kollektiv_header_style()
 */
function kollektiv_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'kollektiv_custom_header_args', array(
		'default-image'          => '',
		'default-bg-color'     => '#1e1e1e',
		'wp-head-callback'       => 'kollektiv_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'kollektiv_custom_header_setup' );

if ( ! function_exists( 'kollektiv_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see kollektiv_custom_header_setup().
	 */
	function kollektiv_header_style() {
		$header_bg_color = get_theme_mod('header_background_color');

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_bgcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-bg-color' ) === $header_bg_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
			.site-header {
				background-color: <?php echo esc_attr( $header_bg_color ); ?>;
			}
		</style>
		<?php
	}
endif;
