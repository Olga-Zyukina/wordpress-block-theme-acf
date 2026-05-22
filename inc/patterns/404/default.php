<?php
/**
 * Pattern: 404 Error Page
 *
 * @author Themegrill
 * @package edu-learn
 * @since 1.0.0
 */

return array(
	'title'      => __( '404 Error Page', 'edu-learn' ),
	'categories' => array( 'edu-learn-404' ),
	'keywords'   => array( '404', 'error', 'not found' ),
	'content'    => '
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"tagName":"section","style":{"spacing":{"blockGap":"2.25rem"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"56px","lineHeight":"1.5","fontStyle":"normal","fontWeight":"800","textTransform":"capitalize"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:56px;font-style:normal;font-weight:800;line-height:1.5;text-transform:capitalize">
					404 - Page Not Found
				</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"19px","lineHeight":"1.84"}}} -->
<p class="has-text-align-center" style="font-size:19px;line-height:1.84">
					Unfortunately the page was not found! Head back to the homepage to continue exploring our courses and resources.
				</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"primary","textColor":"background-1","style":{"elements":{"link":{"color":{"text":"var:preset|color|background-1"}}},"typography":{"fontSize":"17px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background-1-color has-primary-background-color has-text-color has-background has-link-color has-text-align-center has-custom-font-size wp-element-button" href="/" style="font-size:17px;font-style:normal;font-weight:600;text-transform:capitalize">
							Back to Homepage
						</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
',
);