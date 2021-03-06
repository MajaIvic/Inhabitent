<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

// Register Custom Taxonomy
function custom_taxonomy_product_type() {

	$labels = array(
		'name'                       => _x( 'product_type', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'product_type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'product type', 'text_domain' ),
		'all_items'                  => __( 'All product types', 'text_domain' ),
		'parent_item'                => __( 'Parent product type', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent product type', 'text_domain' ),
		'new_item_name'              => __( 'New product type Name', 'text_domain' ),
		'add_new_item'               => __( 'Add product type Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate product type with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'product_type', array( 'product' ), $args );

}
add_action( 'init', 'custom_taxonomy_product_type', 0 );
