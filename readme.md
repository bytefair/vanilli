# Vanilli, an aggro WordPress template for real HTML g's

## Uses

* [WordPress][http://wordpress.org]
* [HTML5 Boilerplate][http://html5boilerplate.com]
* [Bones][http://themble.com/bones]
* [Normalize.css][http://necolas.github.io/normalize.css]
* [_s][http://underscores.me/]
* [Modernizr][http://modernizr.com]
* [Bower][http://bower.io]
* [Bourbon][http://bourbon.io] & [Neat][http://neat.bourbon.io]
* [Sass][http://sass-lang.com]
* [Prism.js][http://prismjs.com]

## TODO

### before 0.4.0

1. style all pagination - scaffold is in place but it's very shaky
2. some structure to author page bio
3. change include clearfix to a placeholder extend

### later

1. related posts plugin?
2. easy shortcode creation
3. stilts for custom types? not sure about this...
4. create a cakefile to automatically build site, then rename normalize, etc

## ROADMAP

* 0.1.0 - Basic page structure works, no CSS, code imported
* 0.2.0 - Skeleton CSS
* 0.3.0 - Fancy CSS
* 0.4.0 - JS systems and plugins
* 0.5.0 - Custom functionality and plugins?
* 0.6.0 - Theme cleanup, favicons, etc
* 1.0.0 - release

## How to Build a Theme with Vanilli

1. Take care of your Bower dependencies. I leave them at latest for development but I almost always lock the version numbers when it goes into production. You don't want to introduce bugs without being able to track where you introduced them.
2. Set up your theme options. Loading order is pretty clear in functions.php. Things listed as optional are optional and can be entirely removed whereas functionality listed as required will break the theme if removed.
3. You probably want to install the Theme Unit Test import which can be downloaded at http://codex.wordpress.org/Theme_Unit_Test. Tons of details regarding theme testing can be found here. You should use the imported posts as a sample blog to make sure you don't miss any important cases.
4. Once theme functionality is set, you will probably want to address the CSS stack. Start with `sass/main.scss` to see how code is loaded. If you're doing a totally custom site, you probably want to delete the optional CSS. Skeleton CSS provides a wonderful coherent framework to operate with and only requires a few variable adjustments to make it exactly how you want it. Optional CSS is opinionated. Below this is a user block where I recommend you define any more specific Sass. I may provide some examples at some point in the future.
5. Sass should be compiled to `css/`. `sass/main.scss` is structured to load all CSS code into itself and WordPress looks for that compiled CSS in `css/main.css`.

## Managing Stylesheets in Vanilli

I have made all the styles for Vanilli in Sass, specifically SCSS so I can import vanilla CSS seamlessly. I personally prefer to use the Sass syntax, but I think it's more generally useful to include SCSS in projects to seamlessly integrate with any vendor CSS.

### Can You Add Preprocessor Framework X?

no

I like Stylus also but don't see any advantages over Sass if you're not in Node or something and I honestly hate Less. Don't write me about putting Less versions of thesesheets because I do not care. I hate the syntax and it feels unnatural. SCSS, despite losing some advantages of Ruby-style Sass feels like a natural extension of CSS. Less's continuing popularity is absolutely baffling to me. I assume it's entirely related to Twitter Bootstrap. Okay, blog post over.

## Code Style Notes

Tabs, not spaces. Set your own width, I don't care. I personally use 2 space tab characters for indentation. Please stick with this if you contribute. IfWhen practical, you should manually wrap your lines at 80 characters. Obviously don't break up HTML elements to do this, but try to manually wrap comments and doc blocks. Split things up onto new lines if you have to.

You may notice that I use a somewhat unconvential coding style for WordPress usage. Instead of putting template tags on their own line, I place the PHP open and close tags on the ends of lines. I think this makes it much more clear what's happening in the code when you can scan the function names looking on the left. PHP templates are ugly enough without having to look at a thousand opening tags. The only time this is not the case is when breaking up a line would create confusion about the HTML structure. So leave attribute generators inline, but break everything else onto new lines.

I know it's weird but it's just something I'm trying to make happen okay.

Complicated arrays and function calls are expanded vertically when it adds clarity to the code. I try to keep the parenthesis aligned, I guess?

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
