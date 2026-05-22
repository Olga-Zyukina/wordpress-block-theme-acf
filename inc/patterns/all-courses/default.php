<?php
/**
 * Pattern
 *
 * @package edu-learn
 * @since 1.0.0
 *
 * slug: edu-learn/all-courses
 * title: All Courses
 * categories: edu-learn-all-courses
 * keywords: courses
 */
return array(
	'title'      => __( 'All Courses', 'edu-learn' ),
	'categories' => array( 'edu-learn-all-courses' ),
	'keywords'   => array( 'courses' ),
	'content'    => '
<!-- wp:group {"tagName":"section","metadata":{"name":"Taxonomy List"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"var:preset|spacing|30","top":"0","bottom":"var:preset|spacing|60"},"blockGap":"0"},"border":{"bottom":{"color":"#e5e7eb","style":"solid","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1215px"}} -->
<section class="wp-block-group" style="border-bottom-color:#e5e7eb;border-bottom-style:solid;border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"typography":{"fontSize":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|10","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|10"},"color":{"text":"#364153"},"elements":{"link":{"color":{"text":"#364153"}}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group has-text-color has-link-color" style="color:#364153;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--10);padding-left:0;font-size:16px"><!-- wp:outermost/icon-block {"iconName":"","width":"20px"} -->
<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:20px;transform:rotate(0deg) scaleX(1) scaleY(1)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 20a1 1 0 0 0 .553.895l2 1A1 1 0 0 0 14 21v-7a2 2 0 0 1 .517-1.341L21.74 4.67A1 1 0 0 0 21 3H3a1 1 0 0 0-.742 1.67l7.225 7.989A2 2 0 0 1 10 14z"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-size:16px;font-style:normal;font-weight:500">Filter Courses</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|10","padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
<p style="font-size:14px">Level</p>
<!-- /wp:paragraph -->

<!-- wp:acf/courses-level-list {"name":"acf/courses-level-list","mode":"preview"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|10"}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
<p style="font-size:14px">Category</p>
<!-- /wp:paragraph -->

<!-- wp:acf/courses-category-list {"name":"acf/courses-category-list","mode":"preview"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","metadata":{"name":"Courses list"},"style":{"spacing":{"margin":{"top":"40px","bottom":"40px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"17px"}},"layout":{"type":"constrained","contentSize":"1215px"}} -->
<section class="wp-block-group" style="margin-top:40px;margin-bottom:40px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"style":{"typography":{"fontSize":"16px"}}} -->
<p style="font-size:16px">Showing 9 courses</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<ul class="courses-list">
</ul>
<!-- /wp:html --></section>
<!-- /wp:group -->
',
);