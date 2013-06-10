<?php
/*
This file contains shortcodes and a button for Prism.js. I've not included
choices for language support because I'm not sure what your Prism.js build will
contain support for. So instead it will ask you.
 */

/*
Makes inline code with [code], optional attribute of "language."
If you want an entire block, remember to wrap this in <pre>. If you wrap in pre,
remember that all spaces will show so don't put spaces between shortcode. The
reason we do pre manually and not in the shortcode is so when you make a code
block, it will format correctly in the visual editor. If the pre block was in
the shortcode, WP would strip all the tabs and spaces from the code block.

e.g.
<pre>[code language="markup"]<html>
	<head>
	</head>
	<body>
		<p>A body paragraph.</p>
	</body>
</html>[/code]</pre>
 */
function prism_code_inline( $atts, $content = null ) {
	$atts = extract( shortcode_atts( array('language'=>'none'), $atts ) );
	return '<code class="language-' . $language . '">' . $content . '</code>';
}
add_shortcode( 'code','prism_code_inline' );

?>
