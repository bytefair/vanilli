jQuery(document).ready ($) ->
	# this function calls for Gravatars
	$('.comment img[data-gravatar]').each ->
		$(@).attr('src', $(@).attr('data-gravatar'))
