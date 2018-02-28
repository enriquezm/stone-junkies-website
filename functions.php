<?php
/* Add support for post thumnails */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 572, 316 ); // Will need to change in the future.

/* Prepend an the post thumbnail if the singular post has one attached. */
// add_filter( 'the_content', 'add_some_chaos' );
// function add_some_chaos( $content ) {
//   if ( is_singular('post') && has_post_thumbnail() ) {
//     $thumbnail = get_the_post_thumbnail();
//     $content = $thumbnail . $content;
//   }
//   return $content;
// }

/* Register custome post type */
function create_poststyle() {
  // Custom Post Type for Members
  register_post_type( 'member',
    array(
      'labels' => array(
        'name' => __( 'Members' ),
        'singular_name' => __( 'Member' )
      ),
      'public' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'query_var' => true,
      'menu-icon' => 'dashicons-groups',
      'rewrite' => array('slug' => 'crew'),
      'supports' => array(
        'title',
        'editor',
        'excerpt',
        'revisions',
        'thumbnail',
      )
    )
  );

  // Custom Post Type for Video/images
  register_post_type( 'media',
    array(
      'labels' => array(
        'name' => __( 'Media' ),
        'singular_name' => __( 'Media' )
      ),
      'public' => true,
      'show_ui' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'query_var' => true,
      'menu-icon' => 'dashicons-admin-media',
      'rewrite' => array('slug' => 'media'),
      'supports' => array(
        'title',
        'editor',
        'excerpt',
        'revisions',
        'thumbnail',
      )
    )

  );
}
add_action( 'init', 'create_poststyle' );

/* Enqueue styles and scripts */
function wssj_enqueue_assets() {
  /* theme's primary style.css file (root) */
  wp_enqueue_style( 'main-css' , get_stylesheet_uri() );

  /* template's primary css file */
  wp_enqueue_style( 'solid-state-styling' , get_template_directory_uri() . '/assets/css/main.css' );
  wp_enqueue_style( 'font-awesome' , get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
  // wp_enqueue_style( 'ie8-styling' , get_template_directory_uri() . '/assets/css/ie8.css' );
  // wp_enqueue_style( 'ie9-styling' , get_template_directory_uri() . '/assets/css/ie9.css' );

  wp_enqueue_script( 'skel' , get_template_directory_uri() . '/assets/js/skel.min.js' );
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'jquery-scrollex' , get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js' );
  wp_enqueue_script( 'util' , get_template_directory_uri() . '/assets/js/util.js' );
  wp_enqueue_script( 'solid-state-js' , get_template_directory_uri() . '/assets/js/main.js' );
}
add_action( 'wp_enqueue_scripts' , 'wssj_enqueue_assets' );
?>
