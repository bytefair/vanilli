<?php
/*
Thanks a lot, Mullenweg
 */
function v_anilli_lyrix() {
	$doperhymes = "I'm in love with you, girl, 'cause you're on my mind
You're the one I think about most every time
And when you pack a smile in everything you do
Don't you understand, girl, this love is true?
You're soft, succulent, so sweet and thin
That's kind of like a vision upon your skin
It lightens up my day, and that's oh so true
Together we're one separated we're two
To make you all mine, all mine is my desire
'Cause you contain a quality, you that I admire
You're pretty plain and simple
You rule my world so try to understand
I'm in love, girl
I'm in so love, girl
I'm just in love, girl, and this is true
Girl, you know it's true
Yes, you know it's true
My love is for you
This is some sort of thing, girl, I can't explain
My emotions start up when I hear your name
Maybe your sweet, sweet voice would ring in my ear
Then delay my system when you are near
Come with your positive emotion, love-making enjoyin'
That's for me to bust it's like a girl and a boy
These feelings I get I often wonder why
So I thought I might discuss this, girl, just you and I
Now what you're wearing I don't care, as I've said before
No reason that I like you, girl, just for what you are
If I said I'd think about it
Ooh, ooh, ooh I love you";

	$doperhymes = explode( "\n", $doperhymes );
	return wptexturize( $doperhymes[ mt_rand( 0, count ( $doperhymes ) -1 ) ] );
}

function v_girl() {
	$incendiary_political_lyric = v_anilli_lyrix();
	echo '<a href="http://www.youtube.com/watch?v=t0qTOkUPlGk">' . $incendiary_political_lyric . '</a>';
}

// I don't get this at all
add_filter('admin_footer_text', 'v_girl');

?>
