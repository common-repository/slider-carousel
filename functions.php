<?php 
/*
* Functions
*/

//Getting Slider posts file
require_once SLIDER_CAROUSEL_DIR .'/includes/sc_galaxy_post_types.php';

//Getting shortcodes php file for Slider
require_once SLIDER_CAROUSEL_DIR .'/includes/sc-slider-shortcodes.php';

//Getting shortcodes button file 
require_once SLIDER_CAROUSEL_DIR .'/includes/extend/sc-gallery-shortcodes-buttons.php';

//Adding js file to admin page and post screens
function gt_gallery_admin_scripts() {
	// This is how we will check what page we are on
    $screen = get_current_screen(); 
    if ( in_array( $screen->id, array( 'post', 'page') ) ) {
    	//Enqueing script
        wp_enqueue_script('admin-script', SLIDER_CAROUSEL_URL . 'assets/js/sc-gallery-admin-script.js', array(), '', true );
		wp_enqueue_script( 'wp-color-picker' ); // the wp-color-picker javascript file
	    wp_enqueue_style( 'wp-color-picker' ); // the wp-color-picker css file
		//Enqueing Style
		wp_enqueue_style( 'gt-admin-css', SLIDER_CAROUSEL_URL . 'assets/css/sc-admin.css', array(), '');
    }
}
add_action( 'admin_enqueue_scripts', 'gt_gallery_admin_scripts');

//Adding custom templates for slider and portfolio single page
add_filter('template_include', 'sc_single_page_templates');

function sc_single_page_templates( $template ){
  // if portfolio signgle page
  if( is_singular('sc-slider')) {
	$template = SLIDER_CAROUSEL_DIR.'includes/single-sc-slider.php';
  }  
  return $template;
 }

 //Image cropping
 add_action( 'init', 'sc_gallery_image_cropping' );
 function sc_gallery_image_cropping() {
 	add_image_size('masonary-1-small', 375, 250, true);
	add_image_size('masonary-1-medium', 375, 375, true);
	add_image_size('masonary-1-full', 375, 500, true);
	add_image_size('masonary-2-small', 300, 250, true);
	add_image_size('masonary-2-full', 630, 530, true);
	add_image_size('masonary-3-small', 360, 282, true);
	add_image_size('masonary-3-full', 750, 590, true);
	add_image_size('masonary-4-small', 300, 300, true);
	add_image_size('masonary-4-full', 300, 600, true);
	add_image_size('slider-thumb', 246, 140, true);
 }

 //Registering styles and scripts for Later use in Front End
 function sc_fg_scripts_handler(){
	wp_register_style( 'bootstrap', SLIDER_CAROUSEL_URL . 'assets/css/bootstrap.css', array(), '');
	wp_register_style( 'font-awesome', SLIDER_CAROUSEL_URL . 'assets/css/font-awesome.min.css', array(), '');
	//wp_register_style( 'gt-portfolio', SLIDER_CAROUSEL_URL . 'assets/css/gt-portfolio.css', array(), '');	
	wp_register_style( 'gt-gallery', SLIDER_CAROUSEL_URL . 'assets/css/gt-gallery.css', array(), '');
	//wp_register_style( 'lightgallery', SLIDER_CAROUSEL_URL . 'assets/css/lightgallery.css', array(), '');
	wp_register_script('bootstrap', SLIDER_CAROUSEL_URL . 'assets/js/bootstrap.js', array(), '', true);
	//wp_register_script('gt-isotope-pakaged', SLIDER_CAROUSEL_URL . 'assets/js/isotope.pkgd.min.js', array(), '', true);	
	//wp_register_script('gt-images-loaded-pkged', SLIDER_CAROUSEL_URL . 'assets/js/imagesloaded.pkgd.js', array(), '', true);
	//wp_register_script('gt-mousewheel', SLIDER_CAROUSEL_URL . 'assets/js/jquery.mousewheel.min.js', array(), '', true);
	//wp_register_script('gt-lightgallery', SLIDER_CAROUSEL_URL . 'assets/js/lightgallery.js', array(), '', true);
	//wp_register_script('gt-multioption', SLIDER_CAROUSEL_URL . 'assets/js/lg-multiOption.js', array(), '', true);
	//GT Slider Scripts and Styles
	wp_register_style( 'gt-slider', SLIDER_CAROUSEL_URL . 'assets/sc-slider-assets/css/sc-slider.css', array(), '');
	wp_register_style( 'owl-carousel-css', SLIDER_CAROUSEL_URL . 'assets/sc-slider-assets/css/owl.carousel.css', array(), '');
	wp_register_style( 'animate-css', SLIDER_CAROUSEL_URL . 'assets/css/animate.css', array(), '');
	wp_register_script('owl-carousel', SLIDER_CAROUSEL_URL . 'assets/sc-slider-assets/js/owl.carousel.min.js', array(), '', true);
	wp_register_script('owl-carousel-thumbs', SLIDER_CAROUSEL_URL . 'assets/sc-slider-assets/js/owl.carousel2.thumbs.min.js', array(), '', true);		
	wp_register_script('gt-gallery-script', SLIDER_CAROUSEL_URL . 'assets/js/sc-gallery-script.js', array(), '', true);
}
add_action( 'wp_enqueue_scripts', 'sc_fg_scripts_handler' );

?>