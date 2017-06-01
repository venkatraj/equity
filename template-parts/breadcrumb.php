<?php
/**
 * The template used for displaying page breadcrumb
 *
 * @package Equity
 */

 $breadcrumb = get_theme_mod( 'breadcrumb',true ); 
if( !is_front_page() ): ?>
	<div class="breadcrumb"> 
		<div class="container"><?php
		    if( !is_search() && !is_archive() && !is_404() ) : ?>
				<div class="breadcrumb-left sixteen columns">
					<?php the_title('<h2>','</h2>');?>			
				</div><?php
			endif; ?>
			<?php if( $breadcrumb ) : ?>
				<div class="breadcrumb-right sixteen columns">
					<?php equity_breadcrumbs(); ?>
				</div>
			<?php endif; ?>
		</div>
	</div><?php  
endif;