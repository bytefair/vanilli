<?php
/*
setup.php

Defines theme features
 */

add_action( 'after_setup_theme', 'v_supports' );
function v_supports() {
  add_theme_support( 'automatic_feed_links' ); //Don't let social media kill RSS
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-background' );
  add_theme_support( 'custom-header' );
  // add_theme_support( 'post-formats',
  //   array(
  //     'aside',
  //     'gallery',
  //     'link',
  //     'image',
  //     'quote',
  //     'status',
  //     'video',
  //     'audio',
  //     'chat'
  //   )
  // );
  add_theme_support( 'menus' );
  // menus have to be registered in this array before they are called
  register_nav_menus( array(
    'main-menu' => __( 'Main navigation menu', 'vanilli' )
  ) );
  // load translations that are available
  load_theme_textdomain( 'vanilli', get_template_directory() .'/translation' );
  $locale = get_locale();
  $locale_file = get_template_directory() . "/translation/$locale.php";
  if ( is_readable($locale_file) ) require_once($locale_file);
}

add_action( 'widgets_init', 'v_register_sidebars' );
function v_register_sidebars() {
  register_sidebar( array(
    'id'            => 'sidebar1',
    'name'          => __( 'Main sidebar', 'vanilli' ),
    'description'   => __( 'The main widget area', 'vanilli' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h1 class="widget-title">',
    'after_title'   => '</h1>'
  ) );
}

add_action( 'v_site_navigation', 'v_define_site_navigation' );
function v_define_site_navigation() {
  wp_nav_menu( array(
    'theme_location'  => 'main-menu',
    'container'       => false,
    'menu'            => __( 'Main navigation menu', 'vanilli' ),
    'fallback_cb'     => 'v_default_site_navigation'
  ) );
}

function v_default_site_navigation() {
  wp_page_menu( array(
    'show_home' => true,
    'echo'      => true
  ) );
}
