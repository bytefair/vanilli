# Vanilli, an aggro WordPress template for real HTML g's

## Uses

* WordPress
* HTML5 Boilerplate
* Bones
* Normalize.css
* _s
* Modernizr
* Bower
* Bourbon & Neat
* Sass

## TODO

1. comments.php
2. add menu support
3. dynamic sidebar support

## ROADMAP

* 0.1.0 - Basic page structure works, no CSS, code imported
* 0.2.0 - Skeleton CSS
* 0.3.0 - JavaScript systems set up
* 0.4.0 - Fancy CSS
* 0.5.0 - Custom functionality and plugins?
* 0.6.0 - Theme cleanup, favicons, etc
* 1.0.0 - release

## How to Build a Theme with Vanilli

1. Install Bower dependencies.
2. Set up your theme options. Loading order is pretty clear in functions.php.

## Style Notes

Tabs, not spaces. Set your own width, I don't care. I personally use 2 space tab
characters for indentation. Please stick with this if you contribute. When
practical, you should manually wrap your lines at 80 characters. Obviously don't
break up HTML elements to do this, but try to manually wrap comments and doc
blocks.

You may notice that I use a somewhat unconvential coding style for WordPress
usage. Instead of putting template tags on their own line, I place the PHP open
and close tags on the ends of lines. I think this makes it much more clear
what's happening in the code when you can scan the function names looking on the
left. PHP templates are ugly enough without having to look at a thousand opening
tags. The only time this is not the case is when breaking up a line would create
confusion about the HTML structure. So leave attribute generators inline, but
break everything else onto new lines.

Complicated arrays and function calls are expanded vertically when it adds
clarity to the code.

### Comments

		/*
		Long blocks of documentation are written like this. I prefer you use these
		only when describing code pre-function
		 */

		/*** THIS IS A SECTION FLAG ***/

		// inline function code should be commented using double slash. You can
		// start these after code if it doesn't mess with 80 column wrapping or
		// before code lines you want to highlight. Obviously, multiple lines are
		// cool to use.
