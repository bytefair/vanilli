<?php
/*
index.php

This is the file that is the ultimate fallback in a template. If nothing else
matches at a higher priority, this template will be called.
 */
get_header();
if (have_posts()) :
	/** start the loop **/
	while (have_posts()) :
		/** unfurls the currently iterated post so you can call template tags **/
		the_post(); ?>

		<article id="post-<?php the_ID(); ?>" class="hentry" <?php post_class( 'clearfix' ); ?> role="article">

			<header>
				<h1 class="entry-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php
						the_title(); ?>
					</a>
				</h1>
				<h2 class="entry-summary"></h2>
				<p class="byline vcard"><?php
					printf(
						__( 'Posted on <time class="published" datetime="%1$s">%2$s</time> by <span class="author fn">%3$s</span>', 'vanilli' ),
						get_the_time( 'Y-m-j' ),
						get_the_time( get_option( 'date_format' ) ),
						v_get_the_author_posts_link() ); ?>
				</p>
				<p class="post-category"><?php
					printf(__( 'Filed under: %1$s', 'vanilli' ), get_the_category_list( ', ' )); ?>
				</p>
			</header>

			<div class="entry-content clearfix"><?php
				the_content(); ?>
			</div>

			<footer><?php
				the_tags(); ?>
			</footer>

		</article><?php

	endwhile;
	/** end the loop **/
	do_action( 'post_loop_nav' );
else: get_template_part( 'no-results', 'index' );
endif;
get_footer(); ?>
