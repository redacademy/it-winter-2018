<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
if ( ! function_exists('it_people_post_type') ) {

  // Register Custom Post Type: People
  function it_people_post_type() {

    $labels = array(
      'name'                  => 'People',
      'singular_name'         => 'Person',
      'menu_name'             => 'People',
      'name_admin_bar'        => 'People',
      'archives'              => 'People Archives',
      'attributes'            => 'Person Attributes',
      'parent_item_colon'     => 'Person Parent:',
      'all_items'             => 'All People',
      'add_new_item'          => 'Add New Person',
      'add_new'               => 'Add New',
      'new_item'              => 'New Person',
      'edit_item'             => 'Edit Person',
      'update_item'           => 'Update Person',
      'view_item'             => 'View Person',
      'view_items'            => 'View People',
      'search_items'          => 'Search People',
      'not_found'             => 'Not found',
      'not_found_in_trash'    => 'Not found in Trash',
      'featured_image'        => 'Featured Image',
      'set_featured_image'    => 'Set featured image',
      'remove_featured_image' => 'Remove featured image',
      'use_featured_image'    => 'Use as featured image',
      'insert_into_item'      => 'Insert into Person',
      'uploaded_to_this_item' => 'Uploaded to this Person',
      'items_list'            => 'People list',
      'items_list_navigation' => 'People list navigation',
      'filter_items_list'     => 'Filter people list',
    );
    $args = array(
      'label'                 => 'Person',
      'description'           => 'Organisation members e.g. staff, cast, instructors',
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
      'taxonomies'            => array( 'category', 'post_tag' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'menu_icon'             => 'dashicons-admin-users',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => true,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
      'show_in_rest'          => true,
    );
    register_post_type( 'post_people', $args );

  }
  add_action( 'init', 'it_people_post_type', 0 );
  
}