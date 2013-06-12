<?php
/*
index.php

This is the file that is the ultimate fallback in a template. If nothing else
matches at a higher priority, this template will be called.
 */
get_header(); ?>

<div class="site-content"><?php

	if ( have_posts() ) :

		while ( have_posts() ) :
			the_post();
			get_template_part( 'content', get_post_format() );
		endwhile;
		do_action( 'v_pagination' );

	else:

		get_template_part( 'no-results', 'index' );

	endif; ?>

</div><?php

get_sidebar();

get_footer(); ?>
