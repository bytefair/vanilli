<?php
/*
page.php

This template matches any pages.
 */
get_header(); ?>

<div class="site-content"><?php

	while ( have_posts() ) :
		the_post();
		get_template_part( 'content', 'page' );
	endwhile; ?>

</div><?php

get_sidebar();

get_footer(); ?>
