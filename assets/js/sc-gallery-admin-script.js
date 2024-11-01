jQuery(document).ready(function($){
    window.setInterval(function(){
		$("#flip-count").parent('.mce-container-body').parent('div').css('display', 'none');
		$("#double-count").parent('.mce-container-body').parent('div').css('display', 'none');
		$("#merge-count").parent('.mce-container-body').parent('div').css('display', 'none');
		$("#standard-count").parent('.mce-container-body').parent('div').css('display', 'none');
		$("#zigzag-count").parent('.mce-container-body').parent('div').css('display', 'none');
		$("#simple-count").parent('.mce-container-body').parent('div').css('display', 'none');
		$("#smart-title").parent('.mce-container-body').parent('div').css('display', 'none'); 
		$(".mce-gt-slider-popup .mce-container-body > .mce-container.mce-abs-layout-item").css('position', 'static !important', 'display', 'block', 'padding', '10px 7px');
		var windowHeight = ($( window ).height());
		$(".mce-window-head").parent('.mce-reset').css('height', windowHeight);	
		$(".mce-window-head").parent('.mce-reset').css('overflow', 'hidden');		
		$(".mce-window-head").parent('.mce-reset').css('overflow-y', 'scroll');		
		var selectedSlider = $("#multi-slider span.mce-txt").text();
			if(selectedSlider == "Merge Slider"){
				$("#merge-count").parent('.mce-container-body').parent('div').css('display', 'block');
			} 
			if(selectedSlider == "Double Row Slider"){
				$("#double-count").parent('.mce-container-body').parent('div').css('display', 'block');
			}
			if(selectedSlider == "Flip Slider"){
				$("#flip-count").parent('.mce-container-body').parent('div').css('display', 'block');
			}
			if(selectedSlider == "Standard Slider"){
				$("#standard-count").parent('.mce-container-body').parent('div').css('display', 'block');
				$("#smart-title").parent('.mce-container-body').parent('div').css('display', 'block');
			}
			if(selectedSlider == "Zigzag Slider"){
				$("#zigzag-count").parent('.mce-container-body').parent('div').css('display', 'block');
				$("#smart-title").parent('.mce-container-body').parent('div').css('display', 'block');
			}
			if(selectedSlider == "Simple Slider"){
				$("#simple-count").parent('.mce-container-body').parent('div').css('display', 'block');
				$("#smart-title").parent('.mce-container-body').parent('div').css('display', 'block');
			}
	}, 500); 
});