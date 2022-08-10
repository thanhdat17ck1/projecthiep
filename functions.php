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


function initTheme() { 
    //Đăng ký menu cho website
    register_nav_menu('header-top',__('Menu top'));
    register_nav_menu('header-main',__('Menu chính'));
    register_nav_menu('footer-menu',__('Menu footer'));
} 
add_action('init','initTheme');

//Code lấy nội dung bài viết rút gọn
function teaser($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'[...]';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt.'...';
}

?>