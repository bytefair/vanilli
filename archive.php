<?php
/*
archive.php

Controls display of archives
 */
get_header(); ?>
<div class="site-content"><?php
	/** controls the complicated archive title **/
	echo v_archive_header();
	if (have_posts()) {
		/** start the loop **/
		while ( have_posts() ) {
			/** unfurls the currently iterated post so you can call template tags **/
			the_post();
			/** calls content-{format}.php or falls back to content.php **/
			get_template_part( 'content', 'archive' );
		}
		/** end the loop **/
		do_action( 'v_pagination' );
	} else get_template_part( 'no-results', 'archive' ); ?>
</div><?php
get_sidebar();
get_footer(); ?>
