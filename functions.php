<?php

//switch wordpress text editor 
add_filter('use_block_editor_for_post', '__return_false');


add_theme_support( 'post-thumbnails' );

//create shortcode get url
function base_url_func() {
    return get_stylesheet_directory_uri();
}
add_shortcode( 'base_url', 'base_url_func' );

// Remove post post type
add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
    remove_menu_page( 'edit.php' );
}

// Re-create post post type
// Our custom post type function
function create_posttype() {
  
    register_post_type( 'post',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Tin tức' ),
                'singular_name' => __( 'Blog' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'tin-tuc'),
            'show_in_rest' => true,
  
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
?>