<?php
/*
generators.php

This file contains functions called directly from the templates. I put it here
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
 * This is the set of functions that call the menus. The fallback is called when
 * no menus are defined which simply creates menus from the pages list.
 */



/* from bones theme:
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

?>
