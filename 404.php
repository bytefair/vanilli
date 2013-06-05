<?php
/*
404.php

This template is thrown on 404.
 */
get_header(); ?>

<div class="entry-content">
	<h1><?
		_e( '404 - Where are you trying to go?', 'mens' ); ?>
	</h1><?php
	/*
	The 404 is such a good opportunity for you to do cool marketing or have some
	fun, and here you are throwing a search form. You should probably replace the
	functionlity here on your own site.
	 */
	get_search_form(); ?>

</div><?php

get_sidebar();
get_footer(); ?>
