<?php
$categories = acf_get_terms([
	'taxonomy'      => [ 'course-category' ], 
	'orderby'       => 'id',
]);

if( $categories && ! is_wp_error( $categories ) ){
	echo '<ul id="categories" class="categories-list">';
	foreach( $categories as $category ){
		echo '<li value="'. esc_html( $category->slug ) .'">'. esc_html( $category->name ) .'</li>';
	}
	echo '</ul>';
}