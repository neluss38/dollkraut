<?php

// function base_taxonomies() {
// 	$labels = array(
// 		'name'                       => _x( '[Name]s', 'taxonomy general name' ),
// 		'singular_name'              => _x( '[Name]', 'taxonomy singular name' ),
// 		'search_items'               => __( 'Search [Name]s' ),
// 		'popular_items'              => __( 'Popular [Name]s' ),
// 		'all_items'                  => __( 'All [Name]s' ),
// 		'parent_item'                => null,
// 		'parent_item_colon'          => null,
// 		'edit_item'                  => __( 'Edit [Name]' ),
// 		'update_item'                => __( 'Update [Name]' ),
// 		'add_new_item'               => __( 'Add New [Name]' ),
// 		'new_item_name'              => __( 'New [Name]' ),
// 		'separate_items_with_commas' => __( 'Separate [Name]s with commas' ),
// 		'add_or_remove_items'        => __( 'Add or remove [Name]s' ),
// 		'choose_from_most_used'      => __( 'Choose from the most used [Name]s' ),
// 		'not_found'                  => __( 'No [Name]s found.' ),
// 		'menu_name'                  => __( '[Name]s' ),
// 	);
// 	$args = array(
// 		'hierarchical'          => false,
// 		'labels'                => $labels,
// 		'show_ui'               => true,
// 		'show_admin_column'     => true,
// 		'update_count_callback' => '_update_post_term_count',
// 		'query_var'             => true,
// 		'rewrite'               => array( 'slug' => '[name]' ),
// 	);
// 	register_taxonomy( '[name]', 'page', $args );
// }
// add_action( 'init', 'base_taxonomies' );