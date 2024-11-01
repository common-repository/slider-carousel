<?php 
/*
* File to serve for Slider shortcodes
*/

//GT Slider shortcode
function sc_slider_shortcode( $atts ) {
    extract( shortcode_atts( array(
		
	), $atts)); 
		
	//Getting GT Slider Content
	require SLIDER_CAROUSEL_DIR .'/includes/sc-slider-settings.php';
?>
<?php 
	//Getting GT Slider Content
	require SLIDER_CAROUSEL_DIR .'/includes/sc-slider-content.php';
	?>			
<?php
}
add_shortcode( 'sc_slider', 'sc_slider_shortcode' );
?>