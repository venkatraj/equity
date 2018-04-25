<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Equity
 */
?><!DOCTYPE html> 
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11"><?php
if ( is_singular() && pings_open() ) { ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><?php
} ?>
<?php wp_head(); ?>  
</head>
  
<body <?php body_class(); ?>>  
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'equity' ); ?></a>
	<header id="masthead" class="site-header" role="banner">   
		<?php if (get_theme_mod ('header-site-style') != 'style2' ) { ?>
			<?php if( is_active_sidebar( 'top-left' )  || is_active_sidebar( 'top-right' ) ): ?>
				<div class="top-nav">
					<div class="container">		
						<div class="eight columns"> 
							<div class="cart-left">
								<?php dynamic_sidebar('top-left' ); ?>
							</div>
						</div>

						<div class="eight columns">
							<div class="cart-right">
								<?php dynamic_sidebar('top-right' ); ?>  
							</div>
						</div>
					</div>
				</div> <!-- .top-nav -->
			<?php endif;?>
			
	<?php do_action('equity_before_header'); ?>
			<div class="branding">
				<div class="nav-wrap header-image">
					<div class="container">
						<div class="six columns">
							<div class="site-branding">
								<?php 
									$logo_title = get_theme_mod( 'logo_title' );   
									$tagline = get_theme_mod( 'tagline',true);
									if( $logo_title && function_exists( 'the_custom_logo' ) ) :
		                                the_custom_logo();     
		                            else : ?>
										<h1 class="site-title"><a style="color: #<?php header_textcolor(); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php endif; ?>
								<?php if( $tagline ) : ?>
										<p class="site-description"><?php bloginfo( 'description' ); ?></p>
								<?php endif; ?>
							</div><!-- .site-branding -->
						</div>
						<div class="ten columns">
							<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
								<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><i class="fa fa-align-justify fa-2x" aria-hidden="true"></i></button>
								<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
							</nav><!-- #site-navigation -->
						</div>
					</div>
				</div>
		     </div>
		<?php } else { ?>
		
	<?php do_action('equity_before_header'); ?>
			<div class="branding header-image">
	        	<div class="header-style2">
					<div class="container">
						<?php if ( is_active_sidebar( 'top-right' )) { ?>
						    <div class="eight columns">
						<?php } else { ?>
							<div class="sixteen columns">
						<?php } ?>
								<div class="site-branding"><?php 
									$logo_title = get_theme_mod( 'logo_title' );   
									$tagline = get_theme_mod( 'tagline',true);
									if( $logo_title && function_exists( 'the_custom_logo' ) ) :
		                                the_custom_logo();     
		                            else : ?>
										<h1 class="site-title"><a style="color: #<?php header_textcolor(); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1><?php 
									endif;  
									if( $tagline ) : ?>
										<p class="site-description"><?php bloginfo( 'description' ); ?></p>
									<?php endif; ?>
								</div><!-- .site-branding -->
							</div>	
						<?php if ( is_active_sidebar( 'top-right' )) : ?>	
							<div class="eight columns">
								<div class="top-nav">
									<div class="cart-right">
										<?php dynamic_sidebar('top-right' ); ?>  
									</div>
								</div>
							</div> <!-- .top-nav -->
						<?php endif; ?>
		    		</div>
	    		</div>
	    	</div>
			<div class="nav-wrap">
				<div class="container">
					<div class="sixteen columns">
						<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
							<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><i class="fa fa-align-justify fa-2x" aria-hidden="true"></i></button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
		</div>
		<?php } ?>

	</header><!-- #masthead --> 