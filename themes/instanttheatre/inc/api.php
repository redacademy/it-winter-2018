<?php
/**
 * Customize the post_people endpoint for WP API and add support for filter parameter back in.
 *
 * Endpoint: http://HOME_URL.COM/wp-json/wp/v2/post_people
 *
 * @link https://github.com/WP-API/rest-filter
 */

/**
 * Add social media links fields to API request
 */
add_action( 'rest_api_init', function() {
  register_rest_field( 
    'post_people',
    'facebook_link',
    array(
      'get_callback'    => 'get_person_facebook_link',
      'update_callback' => null,
      'schema'          => null,
    )
  );

  register_rest_field( 
    'post_people',
    'twitter_link',
    array(
      'get_callback'    => 'get_person_twitter_link',
      'update_callback' => null,
      'schema'          => null,
    )
  );

  register_rest_field( 
    'post_people',
    'instragram_link',
    array(
      'get_callback'    => 'get_person_instagram_link',
      'update_callback' => null,
      'schema'          => null,
    )
  );
});
    
/**
 * Handler for fetching the post status.
 *
 * @param array           $object     Details of current post.
 * @param string          $field_name Name of field to add to response.
 * @param WP_REST_Request $request    Current request.
 *
 * @return mixed
 */
function get_person_facebook_link( $object, $field_name, $request ) {
  return get_post_meta( $object['id'], $field_name, true );
}
      
/**
 * Handler for fetching the post status.
 *
 * @param array           $object     Details of current post.
 * @param string          $field_name Name of field to add to response.
 * @param WP_REST_Request $request    Current request.
 *
 * @return mixed
 */
function get_person_twitter_link( $object, $field_name, $request ) {
  return get_post_meta( $object['id'], $field_name, true );
}

/**
 * Handler for fetching the post status.
 *
 * @param array           $object     Details of current post.
 * @param string          $field_name Name of field to add to response.
 * @param WP_REST_Request $request    Current request.
 *
 * @return mixed
 */
function get_person_instagram_link( $object, $field_name, $request ) {
  return get_post_meta( $object['id'], $field_name, true );
}