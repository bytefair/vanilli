<?php
/*
enqueue.php

Includes the style and script defnitions.
 */

add_action( 'wp_enqueue_scripts', 'v_site_enqueues', 999 );
function v_site_enqueues() {

	/*** REGISTER ***/

	// I'm using the Bower version, you should customize this for production by
	// going to http://modernizr.com/download/ and only checking the things you
	// will actually need.
	wp_register_script(
		'modernizr',
		THEME_URL . '/components/modernizr/modernizr.js',
		array(),
		'2.6.2',
		false );

	/*** QUEUE ***/

	// Let's use Sass and compile into one stylsheet. Compress for production.
	wp_enqueue_style(
		'main',
		THEME_URL . '/css/main.css',
		array(),
		VERSION,
		'all' );
	wp_enqueue_script( 'modernizr' );
	// Use a plugin to load from CDN if you want, make sure it loads in
	// noConflict mode for compatibility. Probably better to just use native
	// if you can afford the bandwidth.
	// wp_enqueue_script( 'jquery' );
}

?>
