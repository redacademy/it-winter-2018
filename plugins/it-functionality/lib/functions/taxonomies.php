<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

// Register Custom Taxonomy
function it_show_genre_taxonomy() {

	$labels = array(
		'name'                       => 'Show Genres',
		'singular_name'              => 'Show Genre',
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
		'query_var'             		 => true,
		'show_in_rest' 							 => true
	);
	register_taxonomy( 'show_genre', array( 'tribe_events' ), $args );

}
add_action( 'init', 'it_show_genre_taxonomy', 0 );


// Register Custom Taxonomy - Role
function it_person_role_taxonomy() {

	$labels = array(
		'name'                       => 'Roles',
		'singular_name'              => 'Role',
		'menu_name'                  => 'Role',
		'all_items'                  => 'All Roles',
		'parent_item'                => 'Parent Role',
		'parent_item_colon'          => 'Parent Role:',
		'new_item_name'              => 'New Role Name',
		'add_new_item'               => 'Add New Role',
		'edit_item'                  => 'Edit Role',
		'update_item'                => 'Update Role',
		'view_item'                  => 'View Role',
		'separate_items_with_commas' => 'Separate roles with commas',
		'add_or_remove_items'        => 'Add or remove roles',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular roles',
		'search_items'               => 'Search Roles',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No roles',
		'items_list'                 => 'Roles list',
		'items_list_navigation'      => 'Roles list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'role', array( 'post_people' ), $args );

}
add_action( 'init', 'it_person_role_taxonomy', 0 );

// Register Custom Taxonomy
function it_taxonomy_class_type() {

	$labels = array(
		'name'                       => 'Class Types',
		'singular_name'              => 'Class Type',
		'menu_name'                  => 'Class Type',
		'all_items'                  => 'All Class Types',
		'parent_item'                => 'Parent Class Type',
		'parent_item_colon'          => 'Parent Class Type:',
		'new_item_name'              => 'New Class Type Name',
		'add_new_item'               => 'Add New Class Type',
		'edit_item'                  => 'Edit Class Type',
		'update_item'                => 'Update Class Type',
		'view_item'                  => 'View Class Type',
		'separate_items_with_commas' => 'Separate class types with commas',
		'add_or_remove_items'        => 'Add or remove class types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Class Types',
		'search_items'               => 'Search Class Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No class types',
		'items_list'                 => 'Class Types list',
		'items_list_navigation'      => 'Class Types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'class_type', array( 'tribe_events' ), $args );

}
add_action( 'init', 'it_taxonomy_class_type', 0 );