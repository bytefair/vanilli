<article id="post-<?php the_ID(); ?>" class="hentry" <?php post_class(); ?> role="article">

	<header><?php
		the_post_thumbnail(); ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php
				the_title(); ?>
			</a>
		</h1><?php
		v_byline_generator(); ?>
	</header>

	<div class="entry-content"><?php
		the_content();
		wp_link_pages(); ?>
	</div>

	<footer><?php
		v_common_taxonomy(); ?>
	</footer><?php

	comments_template(); ?>

</article>
