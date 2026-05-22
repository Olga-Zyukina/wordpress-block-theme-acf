<?php
/**
 * Pattern
 *
 * @package edu-learn
 * @since 1.0.0
 *
 * slug: pages
 * title: Pages
 * categories: EduLearn
 * keywords: pages, teachers, team
 */


return array(
	'title'      => __( 'Pages', 'edu-learn' ),
	'categories' => array( 'edu-learn-pages' ),
	'keywords'   => array( 'pages' ),
	'content'    => '

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained","contentSize":"1215px"}} -->
<main class="wp-block-group" style="margin-top:0"><!-- wp:group {"tagName":"article","layout":{"type":"constrained"}} -->
<article class="wp-block-group"><!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"42px","lineHeight":"1.24","textTransform":"capitalize","fontStyle":"normal","fontWeight":"800"}},"fontFamily":"manrope"} /-->

<!-- wp:post-content /--></article>
<!-- /wp:group --></main>
<!-- /wp:group -->
',
);
