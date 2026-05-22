<?php
/**
 * Pattern
 *
 * @package edu-learn
 * @since 1.0.0
 *
 * slug: archive
 * title: Archive Page
 * categories: EduLearn
 * keywords: archive, teachers, team
 */

return array(
	'title'      => __( 'Archive Page', 'edu-learn' ),
	'categories' => array( 'edu-learn-archive' ),
	'keywords'   => array( 'archive', 'teachers', 'team' ),
	'content'    => '
<!-- wp:group {"tagName":"main","metadata":{"name":"Arcive"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"1215px"}} -->
<main class="wp-block-group"><!-- wp:query-title {"type":"archive","textAlign":"center","style":{"typography":{"fontSize":"42px","lineHeight":"1.24","fontStyle":"normal","fontWeight":"800","textTransform":"capitalize"}},"fontFamily":"manrope"} /-->

<!-- wp:term-description {"textAlign":"center","style":{"typography":{"fontSize":"19px","lineHeight":"1.84"}}} /-->

<!-- wp:query {"queryId":37,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-query alignfull"><!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"30px","bottom":"30px"}}},"backgroundColor":"background-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-3-background-color has-background" style="padding-top:30px;padding-bottom:30px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","left":"30px","right":"30px","bottom":"60px"},"blockGap":"10px"},"border":{"radius":"16px","width":"1px"}},"backgroundColor":"background-1","borderColor":"accent-6","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-accent-6-border-color has-background-1-background-color has-background" style="border-width:1px;border-radius:16px;padding-top:30px;padding-right:30px;padding-bottom:60px;padding-left:30px"><!-- wp:group {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-date {"isLink":true,"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-3","fontSize":"small"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"26px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.46","textTransform":"capitalize"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontFamily":"manrope"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Read more","style":{"typography":{"fontSize":"17px","lineHeight":"1.82","fontStyle":"normal","fontWeight":"500"}},"textColor":"accent-3"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"5px","bottom":"5px"},"margin":{"top":"80px","bottom":"80px"}},"border":{"radius":"16px"}},"backgroundColor":"background-3","layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group has-background-3-background-color has-background" style="border-radius:16px;margin-top:80px;margin-bottom:80px;padding-top:5px;padding-bottom:5px"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"19px","lineHeight":"1.84","textTransform":"none","fontStyle":"normal","fontWeight":"400"}},"textColor":"heading"} -->
<p class="has-text-align-center has-heading-color has-text-color" style="font-size:19px;font-style:normal;font-weight:400;line-height:1.84;text-transform:none">
	Sorry, but nothing was found. Please try a search with different keywords.
	</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:query-no-results -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group alignwide"><!-- wp:query-pagination {"paginationArrow":"arrow","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"40px","right":"40px"},"margin":{"top":"60px","bottom":"60px"}},"border":{"radius":"16px","width":"1px"}},"backgroundColor":"background-1","textColor":"accent-3","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Previous page","style":{"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.6","textTransform":"capitalize"}}} /-->

<!-- wp:query-pagination-numbers {"midSize":1,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.6","textTransform":"capitalize"}},"fontFamily":"manrope"} /-->

<!-- wp:query-pagination-next {"label":"Next page","style":{"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.6","textTransform":"capitalize"}},"fontFamily":"manrope"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->
',
);