(function($){

	$(function(){
		if( $.fn.flexslider ) {
           $('.flexslider').flexslider();
		}	
	});   

   /* banner form */
    if ($('#banner-form').length > 0) { 
		$(".pull_feedback").toggle(function(){
				$("#banner-form").animate({right:"0px"});
				$('i',this).attr('class','fa fa-long-arrow-alt-down');
				return false;
			},
			function(){
				$("#banner-form").animate({right:"-280px"});
				$('i',this).attr('class','fa fa-long-arrow-alt-up');	
				return false;
			}
	    ); //toggle
	}


})(jQuery);


// jQuery powered scroll to top

jQuery(document).ready(function(){

	//Check to see if the window is top if not then display button
	jQuery(window).scroll(function(){ 
		if (jQuery(this).scrollTop() > 100) {
			jQuery('.scroll-to-top').fadeIn();
		} else {
			jQuery('.scroll-to-top').fadeOut();  
		}
	});

	//Click event to scroll to top
	jQuery('.scroll-to-top').click(function(){
		jQuery('html, body').animate({scrollTop : 0},800);
		return false;
	});
	

});