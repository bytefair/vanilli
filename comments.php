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
	?>
	</h2>

?>
