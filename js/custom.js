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
				$('i',this).attr('class','fa fa-long-arrow-down');
				return false;
			},
			function(){
				$("#banner-form").animate({right:"-280px"});
				$('i',this).attr('class','fa fa-long-arrow-up');	
				return false;
			}
	    ); //toggle
	}


})(jQuery);
