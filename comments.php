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
	else : // comments are closed
	endif;
endif; // end have_comments();

if ( comments_open() ) : ?>
	<section id="respond" class="respond-form">
		<h3><?php
			comment_form_title(
				__('Leave a Reply', 'vanilli'),
				__('Leave a Reply to %s', 'vanilli' )
			); ?>
		</h3>

		<div id="cancel-comment-reply">
			<p class="small"><?php
				cancel_comment_reply_link(); ?>
			</p>
		</div><?php

		if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
			<div class="alert alert-help">
				<p><?php
					printf(
						__('You must be %1$slogged in%2$s to post a comment.', 'vanilli'),
						'<a href="<?php echo wp_login_url( get_permalink() ); ?>">',
						'</a>'
					); ?></p>
			</div><?php
		else : ?>
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform"><?php
				if ( is_user_logged_in() ) : ?>

					<p class="comments-logged-in-as"><?php _e("Logged in as", "vanilli"); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e("Log out of this account", "vanilli"); ?>"><?php _e("Log out", "vanilli"); ?> <?php _e("&raquo;", "vanilli"); ?></a></p><?php

				else : // this happens if user is NOT logged in ?>

					<ul class="clearfix">

						<li>
							<label for="author"><?php _e("Name", "vanilli"); ?> <?php if ($req) _e("(required)"); ?></label>
							<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
						</li>

						<li>
							<label for="email"><?php _e("Mail", "vanilli"); ?> <?php if ($req) _e("(required)"); ?></label>
							<input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
							<small><?php _e("(will not be published)", "vanilli"); ?></small>
						</li>

						<li>
							<label for="url"><?php _e("Website", "vanilli"); ?></label>
							<input type="url" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" tabindex="3" />
						</li>

					</ul><?php
				endif; //end user is logged in ?>

				<p>
					<textarea name="comment" id="comment" tabindex="4">
					</textarea>
				</p>

				<p>
					<input name="submit" type="submit" id="submit" class="button" tabindex="5" value="<?php _e('Submit', 'vanilli'); ?>" /><?php
					comment_id_fields(); ?>
				</p>

				<div class="alert alert-help">
					<p class="allowed-tags">
						<strong>XHTML:</strong> <?php _e('You can use these tags', 'vanilli'); ?>: <code><?php echo allowed_tags(); ?></code>
					</p>
				</div><?php

				do_action('comment_form', $post->ID); ?>

			</form><?php
		endif; // end registration and not logged in ?>
	</section><?php
endif; //end comments open
?>
