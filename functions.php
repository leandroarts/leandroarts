<?php

// Widgetize Sidebar:
if (function_exists("register_sidebar")) {
  register_sidebar(array(
    'name' => 'sidebar-1',
));
}

// Register Menus:
if ( function_exists( 'register_nav_menus' ) ) {
  register_nav_menus(
    array(
      'header_main_menu' => 'Header Main Menu'
    )
  );
}

// Theme Support:
add_theme_support( 'post-thumbnails' );


// CUSTOM EXCERPT READ MORE LINK:
function new_excerpt_more( $more ) {
  return ' - <a class="read-more" href="'. get_permalink( get_the_ID() ) . '"><strong>Read More</strong></a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
  

// CUSTOM POST TYPES + METABOXES 
require_once('post-types/custom-post-type_gallery.php');



/* End Functions.php */
?>