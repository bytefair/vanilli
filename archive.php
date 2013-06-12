<?php
/*
archive.php

Controls display of archives
 */
get_header(); ?>

<div class="site-content"><?php

	echo v_archive_header();

	if ( have_posts() ) :

		while ( have_posts() ) :
			the_post();
			get_template_part( 'content', 'archive' );
		endwhile;

		do_action( 'v_pagination' );

	else get_template_part( 'no-results', 'archive' );
	endif; ?>

</div><?php

get_sidebar();

get_footer(); ?>
