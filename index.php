<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<article class="hentry" <?php post_class( 'clearfix' ); ?> role="article">

	<header>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<?php the_title(); ?>
			</a>
		</h1>
		<h2>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

</article>

<?php endwhile; ?>

<?php endif; ?>
<?php get_footer(); ?>
