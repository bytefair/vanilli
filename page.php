<?php
/*
page.php

This template matches any pages.
 */
get_header();
while (have_posts()) {
	/** unfurls the currently iterated post so you can call template tags **/
	the_post();
	get_template_part( 'content', 'page' );
}
get_sidebar();
get_footer(); ?>
