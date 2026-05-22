<?php
/**
 * Pattern
 *
 * @package edu-learn
 * @since 1.0.0
 *
 * slug: no-title
 * title: No Title Page
 * categories: EduLearn
 * keywords: no-title, teachers, team
 */

return array(
	'title'      => __( 'No Title Page', 'edu-learn' ),
	'categories' => array( 'edu-learn-no-title' ),
	'keywords'   => array( 'no-title', 'teachers', 'team' ),
	'content'    => '

<!-- wp:group {"tagName":"main","layout":{"type":"constrained","contentSize":"1215px"}} -->
<main class="wp-block-group"><!-- wp:post-content /--></main>
<!-- /wp:group -->
',
);
