<article id="post-<?php the_ID(); ?>" class="hentry" <?php post_class( 'clearfix' ); ?> role="article">

	<header>
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
		<p class="post-category"><?php
			printf(__( 'Filed under: %1$s', 'vanilli' ), get_the_category_list( ', ' )); ?>
		</p>
	</header>

	<div class="entry-content clearfix"><?php
		the_excerpt(); ?>
	</div>

</article>
