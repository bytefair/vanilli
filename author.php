<?php
/*
author.php

If you have a multi-author blog, you should almost certainly have an author-
specific archive. If not, then you probably don't even want to have a posted-by
credit anyway. You can create author specific theme pages by naming the template
author-Name.php or if you delete this file, it will fallback to archive.php

I feel like what you will want to do here is very specific for your content, so
I'm only providing one idea for it. Think hard about yours.

The bit at the top allows you to pick through the values of the $curauth object.
I'm going to put some stuff here later but for now I'll just call it for you.
 */
get_header(); ?>

<div class="site-content">

	<h1><?php
		the_author_meta( 'display_name' ); ?>
	</h1><?php

	if ( get_the_author_meta( 'description' ) ) : ?>
		<p><?php
			the_author_meta( 'description' ); ?>
		</p><?php
	endif;

	while ( have_posts() ) : the_post(); ?>
		<ul class="author-post-list">
			<li>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php
					the_title(); ?>
				</a>
			</li>
		</ul><?php
	endwhile; ?>

</div><?php

get_sidebar();

get_footer(); ?>
