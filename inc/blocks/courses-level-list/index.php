<?php
$levels = acf_get_terms([
	'taxonomy'      => [ 'level' ],
	'orderby'       => 'id',
]);

if( $levels && ! is_wp_error( $levels ) ){
	echo '<ul id="levels" class="levels-list">';
	foreach( $levels as $level ){
		echo '<li value="'. esc_html( $level->slug ) .'">'. esc_html( $level->name ) .'</li>';
	}
	echo '</ul>';
}