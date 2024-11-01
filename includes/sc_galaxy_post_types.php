<?php 
/*
* File to register required post types
*/


/**
 * Registsering Custom Post Type (Slider)
 */
    function sc_slider_post_type() {

        $labels = array(
            'name'                  => _x( 'Slider Post Type', 'Post Type General Name', 'gt-portfolio' ),
            'singular_name'         => _x( 'Slider Post Type', 'Post Type Singular Name', 'gt-portfolio' ),
            'menu_name'             => __( 'SC Slider', 'gt-portfolio'),
            'name_admin_bar'        => __( 'Post Type', 'gt-portfolio'),
            'archives'              => __( 'Slider Archives', 'gt-portfolio' ),
            'parent_item_colon'     => __( 'Parent Item:', 'gt-portfolio' ),
            'all_items'             => __( 'All Sliders', 'gt-portfolio'),
            'add_new_item'          => __( 'Add New Slider', 'gt-portfolio'),
            'add_new'               => __( 'Add New', 'gt-portfolio'),
            'new_item'              => __( 'New Slider', 'gt-portfolio' ),
            'edit_item'             => __( 'Edit Slider', 'gt-portfolio' ),
            'update_item'           => __( 'Update Slider', 'gt-portfolio' ),
            'view_item'             => __( 'View Slider', 'gt-portfolio' ),
            'search_items'          => __( 'Search Slider', 'gt-portfolio' ),
            'not_found'             => __( 'Not found', 'gt-portfolio'),
            'not_found_in_trash'    => __( 'Not found in Trash', 'gt-portfolio' ),
            'featured_image'        => __( 'Featured Image', 'gt-portfolio'),
            'set_featured_image'    => __( 'Set featured image', 'gt-portfolio' ),
            'remove_featured_image' => __( 'Remove featured image', 'gt-portfolio' ),
            'use_featured_image'    => __( 'Use as featured image', 'gt-portfolio'),
            'insert_into_item'      => __( 'Insert into Slider', 'gt-portfolio'),
            'uploaded_to_this_item' => __( 'Uploaded to this Slider', 'gt-portfolio'),
            'items_list'            => __( 'Sliders list', 'gt-portfolio' ),
            'items_list_navigation' => __( 'Sliders list navigation', 'gt-portfolio'),
            'filter_items_list'     => __( 'Filter Sliders list', 'gt-portfolio'),
        );
        $args = array(
            'label'                 => __( 'Slider', 'gt-portfolio' ),
            'description'           => __( 'Slider Post type to add sliders', 'gt-portfolio' ),
            'labels'                => $labels,
            'supports'              => array('title', 'editor', 'thumbnail' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'post',
        );
        register_post_type( 'sc-slider', $args );

    }
    add_action( 'init', 'sc_slider_post_type', 0 );
	
/**
 * Registsering Custom Taxonomy 
 */
    function sc_slider_post_type_taxonomy() {

        $labels = array(
            'name'                       => _x( 'Slider Categories', 'Taxonomy General Name', 'gt-portfolio' ),
            'singular_name'              => _x( 'Slider', 'Taxonomy Singular Name', 'gt-portfolio' ),
            'menu_name'                  => __( 'Slider Categories', 'gt-portfolio' ),
            'all_items'                  => __( 'All Slider Category', 'gt-portfolio'),
            'parent_item'                => __( 'Parent Item', 'gt-portfolio' ),
            'parent_item_colon'          => __( 'Parent Item:', 'gt-portfolio'),
            'new_item_name'              => __( 'New Category Name', 'gt-portfolio'),
            'add_new_item'               => __( 'Add New Slider Category', 'gt-portfolio'),
            'edit_item'                  => __( 'Edit Slider Category', 'gt-portfolio'),
            'update_item'                => __( 'Update Slider Category', 'gt-portfolio' ),
            'view_item'                  => __( 'View Slider Category', 'gt-portfolio'),
            'separate_items_with_commas' => __( 'Separate Slider Category with commas', 'gt-portfolio' ),
            'add_or_remove_items'        => __( 'Add or remove Slider Category', 'gt-portfolio' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'gt-portfolio'),
            'popular_items'              => __( 'Popular Slider Categories', 'gt-portfolio' ),
            'search_items'               => __( 'Search Slider Categories', 'gt-portfolio'),
            'not_found'                  => __( 'Not Found', 'gt-portfolio'),
            'no_terms'                   => __( 'No Slider Category', 'gt-portfolio' ),
            'items_list'                 => __( 'Slider Categories list', 'gt-portfolio' ),
            'items_list_navigation'      => __( 'Slider Categories list navigation', 'gt-portfolio'),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
        );
        register_taxonomy( 'sc_slider_category', array( 'sc-slider' ), $args );

    }
    add_action( 'init', 'sc_slider_post_type_taxonomy', 0 );
	//Slider post type ends 
	?>