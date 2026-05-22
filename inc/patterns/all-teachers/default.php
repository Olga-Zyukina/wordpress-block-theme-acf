<?php
/**
 * Pattern
 *
 * @package edu-learn
 * @since 1.0.0
 *
 * slug: edu-learn/all-teachers
 * title: All Teachers
 * categories: edu-learn-all-teachers
 * keywords: teachers
 */
return array(
	'title'      => __( 'All Teachers', 'edu-learn' ),
	'categories' => array( 'edu-learn-all-teachers' ),
	'keywords'   => array( 'teachers' ),
	'content'    => '

<!-- wp:group {"tagName":"section","metadata":{"name":"Teachers List","categories":["edu-learn-all-teachers"],"patternName":"edu-learn/all-teachers/default"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-3","layout":{"type":"constrained","contentSize":"1215px"}} -->
<section class="wp-block-group has-background-3-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:query {"queryId":12,"query":{"perPage":6,"pages":0,"offset":0,"postType":"teacher","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Сетка"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"teacher-list","style":{"spacing":{"margin":{"top":"15px","bottom":"15px"},"blockGap":"25px","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"overflow-hidden","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"var:preset|spacing|30","left":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"border":{"radius":{"topLeft":"15px","topRight":"15px","bottomLeft":"15px","bottomRight":"15px"}},"shadow":"var:preset|shadow|natural"},"layout":{"inherit":false}} -->
<div class="wp-block-group overflow-hidden" style="border-top-left-radius:15px;border-top-right-radius:15px;border-bottom-left-radius:15px;border-bottom-right-radius:15px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:cover {"dimRatio":80,"isUserOverlayColor":true,"minHeight":132,"customGradient":"linear-gradient(135deg,#1447e6 0%,#9810fa 100%)","layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="min-height:132px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim has-background-gradient" style="background:linear-gradient(135deg,#1447e6 0%,#9810fa 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:acf/teacher-list-top {"name":"acf/teacher-list-top","mode":"preview"} /--></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|30"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:acf/teacher-list-body {"name":"acf/teacher-list-body","mode":"preview"} /--></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":{"top":"0","left":"0"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-buttons" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--30)"><!-- wp:button {"textColor":"primary","className":"is-style-outline","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"},"width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"left":"2.5rem","right":"2.5rem","top":"7px","bottom":"7px"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"}},"borderColor":"primary"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color has-link-color has-border-color has-primary-border-color has-custom-font-size wp-element-button" style="border-width:1px;border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:7px;padding-right:2.5rem;padding-bottom:7px;padding-left:2.5rem;font-size:14px;font-style:normal;font-weight:600">View Profile</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"primary","textColor":"background-1","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|background-1"}}},"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}},"spacing":{"padding":{"left":"2.5rem","right":"2.5rem","top":"7px","bottom":"7px"}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background-1-color has-primary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;padding-top:7px;padding-right:2.5rem;padding-bottom:7px;padding-left:2.5rem;font-size:14px;font-style:normal;font-weight:600">Book Trial</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></section>
<!-- /wp:group -->
',
);