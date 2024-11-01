jQuery(document).ready(function($) {
    "use strict";
	
    /* Merge Slider
    ======================================================*/
	if ($('.gt-merge-slider-v1').length) {		
		$(".gt-merge-slider-v1").each(function() {
			if ($('#gt-merge_slider').length) {
			 $('#gt-merge_slider').owlCarousel({
				  items:1,
				  loop:true,
				  dots: false,
				  nav:true,
				  navText:'',
				  margin:1,
				  merge:false,
				  responsive:{
					0:{
						items:1,
					},
					768:{
						items:1,
					},
					1199:{
						items:1,
					}
				}
			  });
		   } 
		});
	}
 });