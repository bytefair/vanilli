<?php
/*
enqueue.php

Includes the style and script defnitions
 */

add_action( 'wp_enqueue_scripts', 'v_enqueues', 999 );
function v_enqueues() {
	if (!is_admin()) {
		// I'm using the Bower version, you should customize this for production
		wp_register_script(
			'modernizr',
			get_stylesheet_directory_uri() . '/components/modernizr/modernizr.js',
			array(),
			'2.6.2',
			false );

		// Why style.css only? We're compiling it, so why not?
		wp_enqueue_style(
			'style',
			get_stylesheet_uri(),
			array(),
			VERSION,
			'all' );
		wp_enqueue_script( 'modernizr' );
		// Use a plugin to load from CDN if you want, make sure it loads in
		// noConflict mode for compatibility
		wp_enqueue_script( 'jquery' );
	}
}

?>
