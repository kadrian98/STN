<?php


function stn_files() {
          
          wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', array('jquery'), '3.5.1', true );
          wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '', true );
          wp_enqueue_script( 'carousel', get_template_directory_uri() . '/vendor/owl-carousel/js/owl.carousel.js', array('jquery'), '', true );
          wp_enqueue_script( 'carousel-min', get_template_directory_uri() . '/vendor/owl-carousel/js/owl.carousel.min.js', array('jquery'), '', true );
          wp_enqueue_script( 'wow', get_template_directory_uri() . '/vendor/wow/wow.min.js', array('jquery'), '1.0.0', true );        
          wp_enqueue_script( 'theme', get_stylesheet_directory_uri() . '/js/theme.js', array('jquery'), false, false );
      
          wp_enqueue_style('stn_bootstrap', get_theme_file_uri('/css/bootstrap.css'));
          wp_enqueue_style('stn_menu', get_theme_file_uri('/css/menu.css'));         
          wp_enqueue_style('stn_maicons', get_theme_file_uri('/css/maicons.css'));
          wp_enqueue_style('stn_theme', get_theme_file_uri('/css/theme.css'));
          wp_enqueue_style('stn_carousel', get_theme_file_uri('/vendor/owl-carousel/css/owl.carousel.css'));
          wp_enqueue_style('stn_animate', get_theme_file_uri('/vendor/animate/animate.css')); 
          wp_enqueue_style('stn_table', get_theme_file_uri('/css/tables.css'));
          wp_enqueue_style('stn_animate', get_theme_file_uri('/css/animate.css'));   
          wp_enqueue_style('stn_card', get_theme_file_uri('/css/card.css'));           
}

add_action('wp_enqueue_scripts', 'stn_files');


function university_post_types() {
  
  // Wydarzenie Post Type
  register_post_type('wydarzenie', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor'),
    'public' => true,
    'labels' => array(
      'name' => 'Wydarzenia',
      'add_new_item' => 'Add New Wydarzenie',
      'edit_item' => 'Edit Wydarzenie',
      'all_items' => 'All Wydarzenia',
      'singular_name' => 'Wydarzenie'
    ),
    'menu_icon' => 'dashicons-admin-site'
  ));

  // Zarząd Post Type
  register_post_type('zarzad', array(
    'show_in_rest' => true,
    'supports' => array('title', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Zarzad',
      'add_new_item' => 'Add New Czlonek',
      'edit_item' => 'Edit Czlonek',
      'all_items' => 'All Czlonkowie',
      'singular_name' => 'Zarzad',
    ),
    'menu_icon' => 'dashicons-admin-users'
  ));

  register_post_type('dokumenty', array(
    'show_in_rest' => true,
    'supports' => array('title', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Dokumenty',
      'add_new_item' => 'Add New Dokument',
      'edit_item' => 'Edit Dokument',
      'all_items' => 'All Dokumenty',
      'singular_name' => 'dokumenty',
    ),
    'menu_icon' => 'dashicons-open-folder'
  ));


}

add_action('init', 'university_post_types');


function stn_features() {
          add_theme_support('title-tag');
          add_theme_support('post-thumbnails');
          set_post_thumbnail_size( 500, NULL, array('bottom', 'left'));
          add_image_size('pageBanner', 1497, 850, true);
          add_image_size('management', 360, 288, true);
          add_image_size('image', 150, NULL, true);
          add_image_size('file', 360, 260, true);
          
}

add_action('after_setup_theme', 'stn_features');
