<article id="post-<?php the_ID(); ?>" class="hentry" <?php post_class(); ?> role="article">

	<header><?php
		the_post_thumbnail(); ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php
				the_title(); ?>
			</a>
		</h1>
		<p class="byline vcard"><?php
			printf(
				__( 'Posted on <time class="published" datetime="%1$s">%2$s</time> by <span class="author fn">%3$s</span>', 'vanilli' ),
				get_the_time( 'Y-m-j' ),
				get_the_time( get_option( 'date_format' ) ),
				v_get_the_author_posts_link() ); ?>
		</p>
	</header>

	<div class="entry-content"><?php
		the_content();
		wp_link_pages(); ?>
	</div>

	<footer>
		<div class="post-category"><?php
			printf(__( 'Filed under: %1$s', 'vanilli' ), get_the_category_list( ', ' )); ?>
		</div>
		<div class="post-tags"><?php
			the_tags(); ?>
		</div>
	</footer><?php

	comments_template(); ?>

</article>
