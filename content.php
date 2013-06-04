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
		the_content( 'Continue reading &rarr;' );
		wp_link_pages(); ?>
	</div>

	<footer><?php
		v_common_taxonomy();

		if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<div class="comments-notify">Comments:&nbsp;
				<span class="comments-link"><?php
					comments_popup_link(
						__( 'Leave a comment', 'vanilli' ),
						__( '1 Comment', 'vanilli' ),
						__( '% Comments', 'vanilli' )
					); ?>
				</span>
			</div><?php
		endif; ?>
	</footer>

</article>
