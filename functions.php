<?php
/*
Author: Paul Graham (@paulgraham)
URL: http://github.com/homosaur/vanilli

This file is basically a mandatory theme plugin. It controls custom
functions, defines options, and is generally critical to the theme's
functionality. Please read the notes on each file to understand what each
of the includes do.
 */

/*** CONSTANTS ***/
define( 'VERSION', '0.0.0' );
define( 'THEME_URL', get_stylesheet_directory_uri() );

/*** CORE OVERRIDES -- OPTIONAL ***/
/*
vanilli/overrides.php

These are "core" edits that perform overrides of WordPress functions I feel
are generally useless or sub-optimal. You can comment out this call without
affecting the theme's core functionality, but it will crap up your header.
 */
require_once('vanilli/overrides.php');


/*** ENQUEUE ASSETS -- REQUIRED ***/
/*
vanilli/enqueue.php

These are the calls that handle all the JS and CSS enqueing for Vanilli. You
should load up your own calls by editing this file.
 */
require_once('vanilli/enqueue.php');


/*** THEME SETUP -- REQUIRED **/
/*
vanilli/setup.php

These are calls to register menus, sidebars, and custom types if needed. It also
contains a skeleton for setting up speecial site icons.
 */

?>
