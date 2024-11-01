<?php 
/*
* File to extend TINYMCE editer to add our own buttons for filter gallery shortcodes
*/

//This function Adds filter to enqueue extending js file 
add_action('admin_head', 'gt_filter_gallery_button');
function gt_filter_gallery_button() {
	global $typenow;
	// check user permissions
	if ( !current_user_can('edit_posts') && !current_user_can('edit_pages') ) {
		return;
	}
	// verify the post type
	if( ! in_array( $typenow, array( 'post', 'page' ) ) )
		return;
	// check if WYSIWYG is enabled
	if ( get_user_option('rich_editing') == 'true') {
		add_filter("mce_external_plugins", "gt_filter_gallery_add_tinymce_plugin");
		add_filter('mce_buttons', 'gt_filter_gallery_shortcode_button');
		//add_action( 'admin_enqueue_scripts','enqueue_script');
	}
}

//Adding tinymcs plugin files
function gt_filter_gallery_add_tinymce_plugin($plugin_array) {
	$plugin_array['gt_filter_gallery_tinymce_button'] =  plugins_url( 'extend/sc-gallery-buttons.js', dirname(__FILE__) );
	return $plugin_array;
}

//Adding buttons to editer
function gt_filter_gallery_shortcode_button($buttons) {
	array_push($buttons, "gt_filter_gallery_tinymce_button");
	return $buttons;
}