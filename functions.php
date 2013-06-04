<?php
/*
Author: Paul Graham (@paulgraham)
URL: http://github.com/homosaur/vanilli

This file is basically a mandatory theme plugin. It controls custom
functions, defines options, and is generally critical to the theme's
functionality. Please read the notes on each file to understand what each
of the includes do. Anything marked "optional" can be commened out entirely.
Obviously if it's marked "required" reverse applies.
 */

/******************
**** CONSTANTS ****
******************/
// Define your constants here, version should be the number of your theme.
define('VERSION', '0.3.0'); // used for versioning of CSS for theme
define('THEME_URL', get_stylesheet_directory_uri());

/*****************
**** OPTIONAL ****
******************/

/*** CORE OVERRIDES ***/
/*
These are "core" edits that perform overrides of WordPress functions I feel
are generally useless or sub-optimal. You can comment out this call without
affecting the theme's core functionality, but it will crap up your header.
 */
require_once('vanilli/overrides.php');

/*** ADMIN OVERRIDES ***/
/*
These are optional edits and overrides of the default WP admin to remove
annoyances and to add some additional functionality. You can add your admin code
here if you don't want to make a plugin.
 */
require_once('vanilli/admin.php');

/*** 31337 H4X0R$ ONLY ***/
require_once('vanilli/vanillize.php');

/*****************
**** REQUIRED ****
*****************/

/*** THEME FEATURE SETUP ***/
/*
These are calls to register menus, sidebars, post types, and many other
WordPress native features.
 */
require_once('vanilli/setup.php');

/*** ENQUEUE ASSETS ***/
/*
These are the calls that handle all the JS and CSS enqueing for Vanilli. You
should load up your own calls by editing this file.
 */
require_once('vanilli/enqueue.php');

/*** GENERATORS ***/
/*
These are functions that control complex HTML generation. They are put in here
because they are scary and messy.
 */
require_once('vanilli/generators.php');

/*** PAGE MODULES ***/
/*
Page modules generate reusable module code to use in templates
 */
require_once('vanilli/modules.php');

?>
