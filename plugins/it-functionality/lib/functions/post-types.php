<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
if ( ! function_exists('people_post_type') ) {

  //People post type
  function people_post_type() {
  
    $labels = array(
      'name'                  => _x( 'People', 'Post Type General Name', 'text_domain' ),
      'singular_name'         => _x( 'Person', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'             => __( 'People', 'text_domain' ),
      'name_admin_bar'        => __( 'People', 'text_domain' ),
      'archives'              => __( 'People Archives', 'text_domain' ),
      'attributes'            => __( 'People Attributes', 'text_domain' ),
      'parent_item_colon'     => __( 'Parent Person:', 'text_domain' ),
      'all_items'             => __( 'All People', 'text_domain' ),
      'add_new_item'          => __( 'Add New Person', 'text_domain' ),
      'add_new'               => __( 'Add Person', 'text_domain' ),
      'new_item'              => __( 'New Person', 'text_domain' ),
      'edit_item'             => __( 'Edit Person', 'text_domain' ),
      'update_item'           => __( 'Update Person', 'text_domain' ),
      'view_item'             => __( 'View Person', 'text_domain' ),
      'view_items'            => __( 'View People', 'text_domain' ),
      'search_items'          => __( 'Search Person', 'text_domain' ),
      'not_found'             => __( 'Person Not found', 'text_domain' ),
      'not_found_in_trash'    => __( 'Person Not found in Trash', 'text_domain' ),
      'featured_image'        => __( 'Featured Image', 'text_domain' ),
      'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
      'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
      'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
      'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
      'items_list'            => __( 'People list', 'text_domain' ),
      'items_list_navigation' => __( 'People list navigation', 'text_domain' ),
      'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
      'label'                 => __( 'Person', 'text_domain' ),
      'description'           => __( 'New People', 'text_domain' ),
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
  add_action( 'init', 'people_post_type', 0 );
  
  }

  //Class post type
  if ( ! function_exists('classes_post_type') ) {

    function classes_post_type() {
    
      $labels = array(
        'name'                  => _x( 'Classes', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Class', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Classes', 'text_domain' ),
        'name_admin_bar'        => __( 'Classes', 'text_domain' ),
        'archives'              => __( 'Class Archives', 'text_domain' ),
        'attributes'            => __( 'Class Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Class:', 'text_domain' ),
        'all_items'             => __( 'All Classes', 'text_domain' ),
        'add_new_item'          => __( 'Add New Class', 'text_domain' ),
        'add_new'               => __( 'Add Class', 'text_domain' ),
        'new_item'              => __( 'New Class', 'text_domain' ),
        'edit_item'             => __( 'Edit Class', 'text_domain' ),
        'update_item'           => __( 'Update Class', 'text_domain' ),
        'view_item'             => __( 'View Class', 'text_domain' ),
        'view_items'            => __( 'View Class', 'text_domain' ),
        'search_items'          => __( 'Search Class', 'text_domain' ),
        'not_found'             => __( 'Class Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Person Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Class', 'text_domain' ),
        'items_list'            => __( 'Class list', 'text_domain' ),
        'items_list_navigation' => __( 'Class list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
      );
      $args = array(
        'label'                 => __( 'Class', 'text_domain' ),
        'description'           => __( 'New Class', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-welcome-learn-more',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
      );
      register_post_type( 'post_class', $args );
    
    }
    add_action( 'init', 'classes_post_type', 0 );
    
    }

    //Shows post type
    function show_post_type() {

      $labels = array(
        'name'                  => 'Shows',
        'singular_name'         => 'Show',
        'menu_name'             => 'Shows',
        'name_admin_bar'        => 'Show',
        'archives'              => 'Shows Archives',
        'attributes'            => 'Show Attributes',
        'parent_item_colon'     => 'Parent Show:',
        'all_items'             => 'All Shows',
        'add_new_item'          => 'Add New Show',
        'add_new'               => 'Add New',
        'new_item'              => 'New Show',
        'edit_item'             => 'Edit Show',
        'update_item'           => 'Update Show',
        'view_item'             => 'View Show',
        'view_items'            => 'View Shows',
        'search_items'          => 'Search Show',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into show',
        'uploaded_to_this_item' => 'Uploaded to this show',
        'items_list'            => 'Shows list',
        'items_list_navigation' => 'Shows list navigation',
        'filter_items_list'     => 'Filter shows list',
      );
      $args = array(
        'label'                 => 'Show',
        'description'           => 'Shows presented by Instant Theatre Company',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'revisions' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-tickets-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
      );
      register_post_type( 'shows', $args );
    
    }
    add_action( 'init', 'show_post_type', 0 );