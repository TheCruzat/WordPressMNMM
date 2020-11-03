<?php

// [example attribute="value"]
function example_func( $atts ) {
	$a = shortcode_atts( array(
		'attribute' => '',
	), $atts );

	return "attribute = {$a['attribute']}";
}
add_shortcode( 'example', 'example_func' );