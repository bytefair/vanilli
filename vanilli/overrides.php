<?php
/*
core.php

Contains overrides and changes to WP's defaults
 */

add_action( 'after_setup_theme', 'v_core_fixes', 15 );
function v_core_fixes() {
	// debullshitification
	remove_action( 'wp_head', 'wlwmanifest_link' ); // Windows Live Writer
	remove_action( 'wp_head', 'rsd_link' ); // Really Simple Discovery
	remove_action( 'wp_head', 'wp_generator' ); // WP ver in header
	// removes rel links because who cares
	remove_action( 'wp_head', 'index_rel_link' );
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// code below comes from http://themble.com/bones/
	// Removes WP versioning on scripts, RSS and CSS for security
	// Styles and scripts turned off by default so you can use native cachebusting
	//add_filter( 'style_loader_src', 'v_strip_version', 9999 );
	//add_filter( 'script_loader_src', 'v_strip_version', 9999 );
	add_filter( 'the_generator', 'v_rss_version' );
	// cleans up garbage CSS
	add_filter( 'wp_head', 'v_remove_wp_widget_recent_comments_style', 1 );
	add_action( 'wp_head', 'v_remove_recent_comments_style', 1 );
	add_filter( 'gallery_style', 'v_gallery_style' );
}

// all these functions come from bones, thx bro
function v_strip_version( $src ) {
	if ( strpos($src, 'ver=') ) { $src = remove_query_arg( 'ver', $src ); }
	return $src;
}

function v_rss_version() { return ''; }

function v_remove_wp_ver_css_js( $src ) {
    if ( strpos($src, 'ver=') )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}

function v_remove_wp_widget_recent_comments_style() {
   if ( has_filter( 'wp_head', 'wp_widget_recent_comments_style' )) {
      remove_filter( 'wp_head', 'wp_widget_recent_comments_style' );
   }
}

function v_remove_recent_comments_style() {
  global $wp_widget_factory;
  if ( isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments']) ) {
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
  }
}

function v_gallery_style($css) {
  return preg_replace("!<style type='text/css'>(.*?)</style>!s", '', $css);
}

?>
