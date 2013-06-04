<?php
/*
This file controls common page modules
 */

// controls the byline generation
function v_byline_generator() { ?>
	<div class="byline vcard"><?php
		printf(
			__( 'Posted on <time class="published" datetime="%1$s">%2$s</time> by <span class="author fn">%3$s</span>', 'vanilli' ),
			get_the_time( 'Y-m-j' ),
			get_the_time( get_option( 'date_format' ) ),
			v_get_the_author_posts_link() ); ?>
	</div><?php
}

// controls the footer taxonomy display
function v_common_taxonomy() { ?>
	<div class="post-category"><?php
		printf(__( 'Filed under: %1$s', 'vanilli' ), get_the_category_list( ', ' )); ?>
	</div>
	<div class="post-tags"><?php
		the_tags(); ?>
	</div><?php
}

?>
