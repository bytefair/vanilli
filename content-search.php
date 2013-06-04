<article id="post-<?php the_ID(); ?>" class="hentry" <?php post_class(); ?> role="article">

	<header>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php
				the_title(); ?>
			</a>
		</h1><?php
		v_byline_generator(); ?>
	</header>

	<div class="entry-content"><?php
		the_excerpt( 'Continue reading &rarr;' ); ?>
	</div>

</article>
