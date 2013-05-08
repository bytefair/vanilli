<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article class="hentry" <?php post_class( 'clearfix' ); ?> role="article">

	<header>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<?php the_title(); ?>
			</a>
		</h1>
		<h2 class="entry-summary"></h2>
		<p class="byline vcard">
			<?php printf(
							__( 'Posted on <time class="published" datetime="%1$s">%2$s</time> by <span class="author fn">%3$s</span>', 'vanilli' ),
							get_the_time( 'Y-m-j' ),
							get_the_time( get_option( 'date_format' ) ),
							v_get_the_author_posts_link() ); ?>
		</p>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<footer>

	</footer>

</article>

<?php endwhile; ?>

<?php endif; ?>
<?php get_footer(); ?>
