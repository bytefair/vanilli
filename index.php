<?php
/*
index.php

This is the file that is the ultimate fallback in a template. If nothing else
matches at a higher priority, this template will be called.
 */
get_header();
if (have_posts()) {
	/** start the loop **/
	while (have_posts()) {
		/** unfurls the currently iterated post so you can call template tags **/
		the_post();
		/** calls content-{format}.php or falls back to content.php **/
		get_template_part( 'content', get_post_format() );
	}
	/** end the loop **/
	do_action( 'post_loop_nav' );
} else get_template_part( 'no-results', 'index' );

get_footer(); ?>
