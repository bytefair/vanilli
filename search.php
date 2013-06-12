<?php
/*
search.php

This file controls search results.
 */
get_header(); ?>

<div class="site-content"><?php

	if (have_posts()) : ?>

		<header>
			<h1 class="archive-title"><?php
				_e('Search Results for: ', 'vanilli');
				echo esc_attr( get_search_query() ); ?>
			</h1>
		</header><?php

		while (have_posts()) :
			the_post();
			get_template_part( 'content', 'search' );
		endwhile;

		do_action( 'post_loop_nav' );

	else: get_template_part( 'no-results', 'search' );
	endif; ?>

</div><?php

get_sidebar();

get_footer(); ?>
