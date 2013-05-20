<?php
/*
setup.php

Defines theme features
 */

add_action( 'after_setup_theme', 'v_supports' );
function v_supports() {
  add_theme_support( 'automatic_feed_links' ); //Don't let social media kill RSS
  //add_theme_support( 'post-thumbnails' );
  //add_theme_support( 'custom-background' );
  //add_theme_support( 'custom-header' );
  /*add_theme_support( 'post-formats',
    array(
      'aside',
      'gallery',
      'link',
      'image',
      'quote',
      'status',
      'video',
      'audio',
      'chat'
    )
  );*/
  //add_theme_support( 'menus' );
  //register_nav_menus(); // remeber to define with wp_nav_menu
}

add_action( 'widgets_init', 'v_register_sidebars' );
function v_register_sidebars() {
  /** Registering one sidebar, you can call these using dynamic_sidebar() **/
}
