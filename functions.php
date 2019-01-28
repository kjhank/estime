<?php

  function estime_styles() {
    wp_register_style('reset', get_stylesheet_directory_uri() . '/reset.css');
    wp_register_style('main-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime( get_stylesheet_directory() . '/style.css' ));
    wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Montserrat:200,400,700|Open+Sans:300,400,700&amp;subset=latin-ext');
    wp_register_style('slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css');
    wp_register_style('slick-theme', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css');
    wp_enqueue_style('reset');
    wp_enqueue_style('main-style');
    wp_enqueue_style('fonts');
    wp_enqueue_style('slick');
    wp_enqueue_style('slick-theme');
  }

  add_action( 'wp_enqueue_scripts', 'estime_styles' );

  function estime_scripts() {
    wp_register_script('slick-js', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'));
    wp_register_script('dark-arts', get_stylesheet_directory_uri() . '/dark-arts.js', array('jquery'));
    wp_enqueue_script('slick-js');
    wp_enqueue_script('dark-arts');
  }
  add_action( 'wp_enqueue_scripts', 'estime_scripts' );

  function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __('menu nagłówka'),
        'footer-menu' => __('menu stopki'),
        'problem-menu' => __('menu twój problem'),
        'dermatology-menu' => __('menu dermatologia'),
        'dentistry-menu' => __('menu stomatologia'),
        'lasers-menu' => __('menu lejzorów'),
        'misc-menu' => __('menu innych usług')
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

  function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');
?>
