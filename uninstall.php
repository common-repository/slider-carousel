<?php
/*
* Plugin Uninstall Script to remove all
* Data from Database upon uninstall
*
*/

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) )
	exit();

//This function removes all GT Gallery Plugin data from the database
function sc_remove_plugin_data() {
	// Set global
	global $wpdb;
	//Removing Slider Posts
	$sc_slider_posts = get_posts( array(
		'numberposts' => -1,
		'post_type' => 'sc-slider',
		'post_status' => 'any' ) );

	foreach ( $sc_slider_posts as $post ){
		wp_delete_post( $post->ID, true );
	}
	
	//Removing Slider Category Taxonomy 
	// Delete terms
	$wpdb->query("
		DELETE FROM
		{$wpdb->terms}
		WHERE term_id IN
		( SELECT * FROM (
			SELECT {$wpdb->terms}.term_id
			FROM {$wpdb->terms}
			JOIN {$wpdb->term_taxonomy}
			ON {$wpdb->term_taxonomy}.term_id = {$wpdb->terms}.term_id
			WHERE taxonomy = 'sc_slider_category'
		) as Term
		);
	");
	// Delete taxonomies
	$wpdb->query( "DELETE FROM {$wpdb->term_taxonomy} WHERE taxonomy = 'sc_slider_category'" );
}

sc_remove_plugin_data();

?>