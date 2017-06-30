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
		'video'                  => true,
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
		.custom-header-media img {
				display: none;
		}   
	</style>
	<?php
	}
   /* Header Video Settings */
    if(function_exists('is_header_video_active') ) {
		if ( is_header_video_active() ) { ?>
			<style type="text/css">    
				#wp-custom-header-video-button {
				    position: absolute;
				    z-index:1;
				    top:20px;
				    right: 20px;
				    background:rgba(34, 34, 34, 0.5);
				    border: 1px solid rgba(255,255,255,0.5);
				}
				.wp-custom-header iframe,
				.wp-custom-header video {
				      display: block;
				      //height: auto;
				      max-width: 100%;
				      height: 100vh;
				      width: 100vw;
				      overflow: hidden;
				}

		    </style><?php
		}
    }
}
endif; // equity_header_style



/**
 * Customize video play/pause button in the custom header.
 */
if(!function_exists('equity_video_controls') ) {
	function equity_video_controls( $settings ) {
		$settings['l10n']['play'] = '<span class="screen-reader-text">' . __( 'Play background video', 'equity' ) . '</span><i class="fa fa-play"></i>';
		$settings['l10n']['pause'] = '<span class="screen-reader-text">' . __( 'Pause background video', 'equity' ) . '</span><i class="fa fa-pause"></i>';
		return $settings;
	}
}
add_filter( 'header_video_settings', 'equity_video_controls' );