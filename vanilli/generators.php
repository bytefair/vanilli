<?php
/*
generators.php

This file contains functions that generate HTML in the templates. I put it here
generally to not obfuscate template code. We're talking about view logic in
some cases. It should not go directly in the template if possible. I know that's
how your daddy taught you how to do it ten years ago but that's suckfest coding.
 */

/*
 * This function simply concatenates meta tags to a variable for printing.
 * You can add additional tags by concatenating your own head tags.
 */
function v_site_meta() {
	// pingback
	$v_meta  = '<link rel="pingback" href="' . get_bloginfo( "pingback_url" ) . '">';
	// Chome Frame it if you got it
	$v_meta .= '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">';
	// mobile
	$v_meta .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
	// for more esoteric mobile browsers
	$v_meta .= '<meta name="HandheldFriendly" content="True">';
	$v_meta .= '<meta name="MobileOptimized" content="320">';
	// Metro tile, favicon, and Apple icons go here

	return $v_meta;
}


/*
 * This is a modified the_author_posts_link() which just returns the link.
 *
 * This is necessary to allow usage of the usual l10n process with printf().
 */
function v_get_the_author_posts_link() {
	global $authordata;
	if ( !is_object( $authordata ) )
		return false;
	$link = sprintf(
		'<a href="%1$s" title="%2$s" rel="author">%3$s</a>',
		get_author_posts_url( $authordata->ID, $authordata->user_nicename ),
		esc_attr( sprintf( __( 'Posts by %s' ), get_the_author() ) ), // No further l10n needed, core will take care of this one
		get_the_author()
	);
	return $link;
}


/*
 * Handles the somewhat complicated header code for archive.php
 */
function v_archive_header() {
	$archive_header = '<header class="archive-header"><h1 class="archive-title">';
	if(is_category()) {
		$archive_header .= __( 'Posts categorized ', 'vanilli' );
		$archive_header .= single_cat_title( '', false );
	} elseif(is_tag()) {
		$archive_header .= __( 'Posts tagged ', 'vanilli' );
		$archive_header .= single_tag_title( '', false );
	} elseif(is_author()) {
		global $post;
		$author_id = $post->post_author;
		$archive_header .= __( 'Posts written by ', 'vanilli' );
		$archive_header .= get_the_author_meta( 'display_name', $author_id );
	} elseif(is_day()) {
		$archive_header .= __( 'Daily archives for ', 'vanilli' );
		$archive_header .= get_the_time( 'l, F j, Y' );
	} elseif(is_month()) {
		$archive_header .= __( 'Monthly archives for ', 'vanilli' );
		$archive_header .= get_the_time( 'F Y' );
	} elseif(is_year()) {
		$archive_header .= __( 'Yearly archives for ', 'vanilli' );
		$archive_header .= get_the_time( 'Y' );
	}
	$archive_header .= '</h1></header>';
	return $archive_header;
}
?>
