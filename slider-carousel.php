<?php
/**
 * Plugin Name: Slider Carousel WordPress Plugin
 * Plugin URI: http://www.filterable-portfolio.com
 * Description: A plugin to show your work portfolio in more than 50 possible sliders/carousels and more than 100 possible grid and masonry portfolios.
 * Version: 1.0
 * Author: Akram ul haq
 * Author URI: http://www.filterable-portfolio.com/akram-ul-haq
 */
 
//Exit if directly accessed
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

define( 'SLIDER_CAROUSEL_DIR', plugin_dir_path( __FILE__ ) );
define( 'SLIDER_CAROUSEL_URL', plugins_url( '/', __FILE__ ) );

//Getting Functions File
require_once SLIDER_CAROUSEL_DIR .'/functions.php';
?>