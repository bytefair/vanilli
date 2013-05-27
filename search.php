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
  	/** start the loop **/
  	while (have_posts()) :
  		/** unfurls the currently iterated post so you can call template tags **/
  		the_post();
  		/** calls content-{format}.php or falls back to content.php **/
      get_template_part( 'content', 'search' );
  	endwhile;
  	/** end the loop **/
  	do_action( 'post_loop_nav' );
  else: get_template_part( 'no-results', 'search' );
  endif; ?>
</div><?php
get_sidebar();
get_footer(); ?>
