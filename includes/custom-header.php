<?php 
/**
 * Setup the WordPress core custom header feature.
 *
 * @uses equity_header_style()  
 * @uses equity_admin_header_style() 
 * @uses equity_admin_header_image()   
 *
 * @package Equity
 */
function equity_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'equity_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'ffffff', 
		'header_text'            => true,
		'width'                  => 1920,
		'height'                 => 400,
		'flex-height'            => true, 
		'wp-head-callback'       => 'equity_header_style'
	) ) );
}

add_action( 'after_setup_theme', 'equity_custom_header_setup' );



if ( ! function_exists( 'equity_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see equity_custom_header_setup().  
 */
function equity_header_style() {
	if ( get_header_image() ) {
	?>
	<style type="text/css">    
		.header-image {
			background-image: url(<?php echo esc_url(get_header_image()); ?>);
			display: block;
		}      
	</style>
	<?php
	}

}
endif; // equity_header_style


