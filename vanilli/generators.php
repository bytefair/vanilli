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
		// No further l10n needed, core will take care of this one
		esc_attr( sprintf( __( 'Posts by %s' ), get_the_author() ) ),
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

/* awesome pagination rippes from bones */
function v_page_navi($before = '', $after = '') {
	global $wpdb, $wp_query;
	$request = $wp_query->request;
	$posts_per_page = intval(get_query_var('posts_per_page'));
	$paged = intval(get_query_var('paged'));
	$numposts = $wp_query->found_posts;
	$max_page = $wp_query->max_num_pages;
	if ( $numposts <= $posts_per_page ) { return; }
	if(empty($paged) || $paged == 0) {
		$paged = 1;
	}
	$pages_to_show = 7;
	$pages_to_show_minus_1 = $pages_to_show-1;
	$half_page_start = floor($pages_to_show_minus_1/2);
	$half_page_end = ceil($pages_to_show_minus_1/2);
	$start_page = $paged - $half_page_start;
	if($start_page <= 0) {
		$start_page = 1;
	}
	$end_page = $paged + $half_page_end;
	if(($end_page - $start_page) != $pages_to_show_minus_1) {
		$end_page = $start_page + $pages_to_show_minus_1;
	}
	if($end_page > $max_page) {
		$start_page = $max_page - $pages_to_show_minus_1;
		$end_page = $max_page;
	}
	if($start_page <= 0) {
		$start_page = 1;
	}
	echo $before.'<nav class="page-navigation"><ol class="bones_page_navi clearfix">'."";
	if ($start_page >= 2 && $pages_to_show < $max_page) {
		$first_page_text = __( "First", 'bonestheme' );
		echo '<li class="bpn-first-page-link"><a href="'.get_pagenum_link().'" title="'.$first_page_text.'">'.$first_page_text.'</a></li>';
	}
	echo '<li class="bpn-prev-link">';
	previous_posts_link('<<');
	echo '</li>';
	for($i = $start_page; $i  <= $end_page; $i++) {
		if($i == $paged) {
			echo '<li class="bpn-current">'.$i.'</li>';
		} else {
			echo '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
		}
	}
	echo '<li class="bpn-next-link">';
	next_posts_link('>>');
	echo '</li>';
	if ($end_page < $max_page) {
		$last_page_text = __( "Last", 'bonestheme' );
		echo '<li class="bpn-last-page-link"><a href="'.get_pagenum_link($max_page).'" title="'.$last_page_text.'">'.$last_page_text.'</a></li>';
	}
	echo '</ol></nav>'.$after."";
}

?>
