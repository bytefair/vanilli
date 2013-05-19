<article id="post-<?php the_ID(); ?>" class="hentry" <?php post_class( 'clearfix' ); ?> role="article">

	<header>
		<h1 class="entry-title"><?php
			_e( 'Nothing Found', 'vanilli' ); ?>
		</h1>
	</header>

	<div class="entry-content clearfix"><?php
		get_search_form(); ?>
	</div>

</article>
