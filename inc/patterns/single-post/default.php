<?php
/**
 * Pattern
 *
 * @package edu-learn
 * @since 1.0.0
 *
 * slug: single-post
 * title: Single Post
 * categories: EduLearn
 * keywords: single-post, teachers, team
 */

return array(
	'title'      => __( 'Single Post', 'edu-learn' ),
	'categories' => array( 'edu-learn-single-post' ),
	'keywords'   => array( 'single-post', 'teachers', 'team' ),
	'content'    => '
<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"2.25rem"}},"layout":{"type":"constrained","contentSize":"1215px"}} -->
<main class="wp-block-group"><!-- wp:group {"tagName":"article","backgroundColor":"background-1","layout":{"type":"constrained"}} -->
<article class="wp-block-group has-background-1-background-color has-background"><!-- wp:post-title {"textAlign":"center","style":{"typography":{"fontSize":"56px","lineHeight":"1.5","fontStyle":"normal","fontWeight":"800","textTransform":"capitalize"},"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase)"}}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"17px","lineHeight":"1.82","textTransform":"capitalize"}}} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"typography":{"fontSize":"17px","lineHeight":"1.82","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-content /--></article>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"16px","bottom":"16px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:16px;margin-bottom:16px"><!-- wp:group {"tagName":"nav","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"ariaLabel":"Post navigation"} -->
<nav aria-label="Post navigation" class="wp-block-group"><!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow","style":{"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.6","textTransform":"capitalize"}},"textColor":"accent-3"} /-->

<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow","style":{"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.6","textTransform":"capitalize"}},"textColor":"accent-3"} /--></nav>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:80px;padding-bottom:80px"><!-- wp:heading {"align":"wide","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"1.4px"},"spacing":{"margin":{"bottom":"30px"}}},"fontSize":"small"} -->
<h2 class="wp-block-heading alignwide has-small-font-size" style="margin-bottom:30px;font-style:normal;font-weight:700;letter-spacing:1.4px;text-transform:uppercase">
			More posts
		</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":114,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"0"},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.6"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontFamily":"manrope","layout":{"type":"default"}} -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"#f2f2f2","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:#f2f2f2;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->

<!-- wp:post-date {"textAlign":"right","isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"},"margin":{"top":"80px","bottom":"80px"}},"border":{"radius":"16px"}},"backgroundColor":"background-3","layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignwide has-background-3-background-color has-background" style="border-radius:16px;margin-top:80px;margin-bottom:80px;padding-top:40px;padding-bottom:40px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontSize":"19px","lineHeight":"1.84","textTransform":"none","fontStyle":"normal","fontWeight":"400"}},"textColor":"heading"} -->
<p class="has-text-align-center has-heading-color has-text-color has-link-color" style="font-size:19px;font-style:normal;font-weight:400;line-height:1.84;text-transform:none">
					No Posts were found
				</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
',
);