<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

	<header>
		<h1 class="entry-title"><?php
				the_title(); ?>
		</h1>
	</header>

	<div class="entry-content"><?php
		the_content();
		wp_link_pages(); ?>
	</div><?php

	comments_template(); ?>

</article>
