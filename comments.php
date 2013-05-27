<?php
/*
The comments template controls comments display if provided, and I'm not a big
fan of the way WP's default structure is.
 */

// safety checks, do not remove these unless you know what you're doing
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

if ( post_password_required() )
	return;

/** comment form starts here **/

if ( have_comments() ) : ?>
	<h2 class="commments-title"><?php
		printf(
			_nx(
				'One comment on &ldquo;%2$s&rdquo;',
				'%1$s comments on &ldquo;%2$s&rdquo;',
				get_comments_number(),
				'comments title',
				'vanilli' ),
			number_format_i18n( get_comments_number() ),
			'<span>' . get_the_title() . '</span>' ); ?>
	</h2><?php
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-above" class="navigation-comment" role="navigation">
			<h1 class="screen-reader-text"><?php
				_e( 'Navigate comments', 'vanilli' ); ?>
			</h1>
			<div class="nav-previous"><?php
				previous_comments_link( __( '&larr; Older Comments', 'vanilli' ) ); ?>
			</div>
			<div class="nav-next"><?php
				next_comments_link( __( 'Newer Comments &rarr;', 'vanilli' ) ); ?>
			</div>
		</nav><?php
	endif; ?>
	<ol class="commentlist">
		<?php wp_list_comments('type=comment&callback=v_comments'); ?>
	</ol><?php
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-above" class="navigation-comment" role="navigation">
			<h1 class="screen-reader-text"><?php
				_e( 'Navigate comments', 'vanilli' ); ?>
			</h1>
			<div class="nav-previous"><?php
				previous_comments_link( __( '&larr; Older Comments', 'vanilli' ) ); ?>
			</div>
			<div class="nav-next"><?php
				next_comments_link( __( 'Newer Comments &rarr;', 'vanilli' ) ); ?>
			</div>
		</nav><?php
	endif;
else:
	if ( comments_open() ) : // comments are open, but there are no comments
	else : // comments are closed ?>
		<p class="nocomments"><?php
			_e("Comments are closed.", "vanilli"); ?>
		</p><?php
	endif;
endif; // end have_comments();

if ( comments_open() ) :
	comment_form();
endif;
?>
