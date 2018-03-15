<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

// Register Custom Taxonomy
function show_genre_taxonomy() {

	$labels = array(
		'name'                       => 'Show_Genres',
		'singular_name'              => 'Show_Genre',
		'menu_name'                  => 'Show Genre',
		'all_items'                  => 'All Show Genres',
		'parent_item'                => 'Parent Show Genre',
		'parent_item_colon'          => 'Parent Show Genre:',
		'new_item_name'              => 'New Show Genre Name',
		'add_new_item'               => 'Add New Show Genre',
		'edit_item'                  => 'Edit Show Genre',
		'update_item'                => 'Update Show Genre',
		'view_item'                  => 'View Show Genre',
		'separate_items_with_commas' => 'Separate show genres with commas',
		'add_or_remove_items'        => 'Add or remove show genres',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Show Genres',
		'search_items'               => 'Search Show Genres',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Show Genres',
		'items_list'                 => 'Show Genres list',
		'items_list_navigation'      => 'Show Genres list navigation',
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
	register_taxonomy( 'show_genre', array( 'genre' ), $args );

}
add_action( 'init', 'show_genre_taxonomy', 0 );
