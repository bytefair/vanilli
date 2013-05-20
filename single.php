<?php
/*
single.php

This template matches any singular item.
 */
get_header();
while (have_posts()) {
	/** unfurls the currently iterated post so you can call template tags **/
	the_post();
	get_template_part( 'content', 'single' );
}
do_action( 'v_pagination' );
get_sidebar();
get_footer(); ?>
