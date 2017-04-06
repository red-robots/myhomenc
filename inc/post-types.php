<?php 
/* Custom Post Types */

add_action('init', 'js_custom_init');
function js_custom_init() 
{
	
	// Register the Homepage Slides
  
     $labels = array(
	'name' => _x('Leadership', 'post type general name'),
    'singular_name' => _x('Leadership', 'post type singular name'),
    'add_new' => _x('Add New', 'Leader'),
    'add_new_item' => __('Add New Leader'),
    'edit_item' => __('Edit Leaders'),
    'new_item' => __('New Leader'),
    'view_item' => __('View Leaders'),
    'search_items' => __('Search Leaders'),
    'not_found' =>  __('No Leaders found'),
    'not_found_in_trash' => __('No Leaders found in Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'Leadership'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('leaders',$args); // name used in query
  
  // Add more between here
  
  // and here
  
  } // close custom post type

/*##############################################
Custom Taxonomies     */
add_action( 'init', 'build_taxonomies', 0 );

function build_taxonomies() {
// custom tax
	register_taxonomy( 'leaders_type', 'leaders',
		array(
			'hierarchical' => true, // true = acts like categories false = acts like tags
			'label' => 'Leaders Type',
			'query_var' => true,
			'show_admin_column' => true,
			'public' => true,
			'rewrite' => array( 'slug' => 'leaders-type' ),
			'_builtin' => true
		) );

} // End build taxonomies