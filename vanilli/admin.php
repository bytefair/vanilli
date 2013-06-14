<?php
/*
admin.php

Overrides for the admin. All this is optional if you hate yourself.
 */

/*** CLEAN UP THE DASHBOARD ***/
add_action( 'admin_menu', 'v_kill_dashboard_widgets' );
function v_kill_dashboard_widgets() {
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'core' );
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'core' );
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'core' );
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'core' );
	// WP's news stuff
	remove_meta_box( 'dashboard_primary', 'dashboard', 'core' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'core' );
	// Uncomment these if you want, I use them sometimes
	// remove_meta_box( 'dashboard_quick_press', 'dashboard', 'core' );
	// remove_meta_box( 'dashboard_right_now', 'dashboard', 'core' );
}

?>
