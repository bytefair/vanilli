<?php
/*
single.php

This template matches any singular item.
 */
get_header(); ?>

<div class="site-content"><?php

	while ( have_posts() ) :
		the_post();
		get_template_part( 'content', 'single' );
	endwhile;

	do_action( 'v_pagination' ); ?>

</div><?php

get_sidebar();

get_footer(); ?>
