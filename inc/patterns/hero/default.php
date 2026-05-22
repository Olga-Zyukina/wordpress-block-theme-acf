<?php
/**
 * Pattern
 *
 * @package edu-learn
 * @since 1.0.0
 *
 * slug: hero
 * title: Hero
 * categories: EduLearn
 * keywords: hero, teachers, team
 */

return array(
	'title'      => __( 'Hero', 'edu-learn' ),
	'categories' => array( 'edu-learn-hero' ),
	'keywords'   => array( 'hero', 'teachers', 'team' ),
	'content'    => '

<!-- wp:group {"tagName":"section","metadata":{"name":"Hero","categories":["edu-learn-hero"],"patternName":"edu-learn/hero/default"},"align":"full","style":{"spacing":{"padding":{"top":"130px","bottom":"130px"}},"color":{"gradient":"linear-gradient(135deg,#eff6ff 0%,#faf5ff 50%,#fdf2f8 100%)"}},"layout":{"type":"constrained","contentSize":"1215px"}} -->
<section class="wp-block-group alignfull has-background" style="background:linear-gradient(135deg,#eff6ff 0%,#faf5ff 50%,#fdf2f8 100%);padding-top:130px;padding-bottom:130px"><!-- wp:group {"className":"hero-layout","style":{"spacing":{"blockGap":"3rem","padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
<div class="wp-block-group hero-layout" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0px","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:group {"className":"bx-sh-1","style":{"border":{"radius":{"topLeft":"50px","topRight":"50px","bottomLeft":"50px","bottomRight":"50px"}},"spacing":{"padding":{"top":"7px","bottom":"7px","left":"16px","right":"16px"},"margin":{"bottom":"0px"}}},"backgroundColor":"background-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group bx-sh-1 has-background-1-background-color has-background" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:50px;border-bottom-right-radius:50px;margin-bottom:0px;padding-top:7px;padding-right:16px;padding-bottom:7px;padding-left:16px"><!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"right":"1rem","left":"1rem","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:1rem;padding-bottom:0;padding-left:1rem"><!-- wp:paragraph {"className":"hero-info","style":{"typography":{"fontSize":"14px"}},"fontFamily":"system-font"} -->
<p class="hero-info has-system-font-font-family" style="font-size:14px">Join 50,000+ active students</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"8px","margin":{"top":"20px","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:20px;margin-bottom:0"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Master English with <mark style="background-color:rgba(0, 0, 0, 0);color:var(--wp--preset--color--primary)" class="has-inline-color">Expert Teachers</mark></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px","letterSpacing":"0px","fontStyle":"normal","fontWeight":"400","lineHeight":"1.6"}},"fontFamily":"system-font"} -->
<p class="has-system-font-font-family" style="font-size:18px;font-style:normal;font-weight:400;letter-spacing:0px;line-height:1.6">Personalized online lessons with certified native speakers. Achieve fluency faster with our proven method.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"16px","left":"16px"},"margin":{"top":"30px"}}}} -->
<div class="wp-block-buttons" style="margin-top:30px"><!-- wp:button {"textColor":"background-1","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|button-1"}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.6"},"color":{"gradient":"linear-gradient(90deg,#1447e6 0%,#9810fa 100%)"}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background-1-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" href="/request/" style="background:linear-gradient(90deg,#1447e6 0%,#9810fa 100%);font-size:16px;font-style:normal;font-weight:500;line-height:1.6">Start Learning   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"background-1","className":"is-style-outline","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500","lineHeight":1.6},"spacing":{"padding":{"left":"32px","right":"32px","top":"16px","bottom":"16px"}},"border":{"width":"1px"}}} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-1-background-color has-background has-custom-font-size wp-element-button" style="border-width:1px;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px;font-size:16px;font-style:normal;font-weight:500;line-height:1.6">Watch Demo</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"25px","bottom":"0"},"padding":{"right":"0","left":"0"},"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal"}} -->
<div class="wp-block-group" style="margin-top:25px;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:outermost/icon-block {"iconName":"wordpress-check","customIconColor":"#15e009","iconColorValue":"#15e009","hasNoIconFill":false,"width":"30px","align":"left","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<div class="wp-block-outermost-icon-block alignleft"><div class="icon-container has-icon-color" style="color:#15e009;width:30px;transform:rotate(0deg) scaleX(1) scaleY(1)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M16.7 7.1l-6.3 8.5-3.3-2.5-.9 1.2 4.5 3.4L17.9 8z"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"14px"}}} -->
<p class="has-text-align-left" style="font-size:14px">Free trial lesson</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:outermost/icon-block {"iconName":"wordpress-check","customIconColor":"#15e009","iconColorValue":"#15e009","hasNoIconFill":false,"width":"30px","align":"left"} -->
<div class="wp-block-outermost-icon-block alignleft"><div class="icon-container has-icon-color" style="color:#15e009;width:30px;transform:rotate(0deg) scaleX(1) scaleY(1)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M16.7 7.1l-6.3 8.5-3.3-2.5-.9 1.2 4.5 3.4L17.9 8z"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"14px"}}} -->
<p class="has-text-align-left" style="font-size:14px">No credit card required</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"color":{"gradient":"linear-gradient(135deg,#dbeafe 0%,#f3e8ff 100%)"},"dimensions":{"minHeight":"1rem"},"border":{"radius":{"topLeft":"1rem","topRight":"1rem","bottomLeft":"1rem","bottomRight":"1rem"}},"shadow":"var:preset|shadow|deep"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="border-top-left-radius:1rem;border-top-right-radius:1rem;border-bottom-left-radius:1rem;border-bottom-right-radius:1rem;background:linear-gradient(135deg,#dbeafe 0%,#f3e8ff 100%);min-height:1rem;box-shadow:var(--wp--preset--shadow--deep)"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"layout":{"rowSpan":1,"columnSpan":1}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="min-height:100%;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"}}},"backgroundColor":"background-1","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group has-background-1-background-color has-background" style="border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:50%;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:outermost/icon-block {"iconName":"wordpress-globe","itemsJustification":"center","iconColor":"primary","iconColorValue":"#1447e6","width":"80px"} -->
<div class="wp-block-outermost-icon-block items-justified-center"><div class="icon-container has-icon-color has-primary-color" style="color:#1447e6;width:80px;transform:rotate(0deg) scaleX(1) scaleY(1)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.3c-4.8 0-8.8 3.9-8.8 8.8 0 4.8 3.9 8.8 8.8 8.8 4.8 0 8.8-3.9 8.8-8.8s-4-8.8-8.8-8.8zm6.5 5.5h-2.6C15.4 7.3 14.8 6 14 5c2 .6 3.6 2 4.5 3.8zm.7 3.2c0 .6-.1 1.2-.2 1.8h-2.9c.1-.6.1-1.2.1-1.8s-.1-1.2-.1-1.8H19c.2.6.2 1.2.2 1.8zM12 18.7c-1-.7-1.8-1.9-2.3-3.5h4.6c-.5 1.6-1.3 2.9-2.3 3.5zm-2.6-4.9c-.1-.6-.1-1.1-.1-1.8 0-.6.1-1.2.1-1.8h5.2c.1.6.1 1.1.1 1.8s-.1 1.2-.1 1.8H9.4zM4.8 12c0-.6.1-1.2.2-1.8h2.9c-.1.6-.1 1.2-.1 1.8 0 .6.1 1.2.1 1.8H5c-.2-.6-.2-1.2-.2-1.8zM12 5.3c1 .7 1.8 1.9 2.3 3.5H9.7c.5-1.6 1.3-2.9 2.3-3.5zM10 5c-.8 1-1.4 2.3-1.8 3.8H5.5C6.4 7 8 5.6 10 5zM5.5 15.3h2.6c.4 1.5 1 2.8 1.8 3.7-1.8-.6-3.5-2-4.4-3.7zM14 19c.8-1 1.4-2.2 1.8-3.7h2.6C17.6 17 16 18.4 14 19z"></path></svg></div></div>
<!-- /wp:outermost/icon-block --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"20px","lineHeight":1.4,"fontStyle":"normal","fontWeight":"600"}},"fontFamily":"system-font"} -->
<p class="has-text-align-center has-system-font-font-family" style="font-size:20px;font-style:normal;font-weight:600;line-height:1.4">Interactive Learning Platform</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group"><!-- wp:columns {"className":"shadow-xl","style":{"spacing":{"margin":{"top":"-75px"},"padding":{"right":"0","left":"0","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"blockGap":{"top":"var:preset|spacing|10","left":"var:preset|spacing|10"}},"border":{"radius":{"topLeft":"1rem","topRight":"1rem","bottomLeft":"1rem","bottomRight":"1rem"}},"shadow":"var:preset|shadow|natural"},"backgroundColor":"background-1"} -->
<div class="wp-block-columns shadow-xl has-background-1-background-color has-background" style="border-top-left-radius:1rem;border-top-right-radius:1rem;border-bottom-left-radius:1rem;border-bottom-right-radius:1rem;margin-top:-75px;padding-top:var(--wp--preset--spacing--10);padding-right:0;padding-bottom:var(--wp--preset--spacing--10);padding-left:0;box-shadow:var(--wp--preset--shadow--natural)"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"24px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"700"}},"fontFamily":"system-font"} -->
<p class="has-system-font-font-family" style="font-size:24px;font-style:normal;font-weight:700;line-height:1.3">50K+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","lineHeight":1.4,"fontStyle":"normal","fontWeight":"400"}},"fontFamily":"system-font"} -->
<p class="has-system-font-font-family" style="font-size:12px;font-style:normal;font-weight:400;line-height:1.4">Students</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"24px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"700"}},"fontFamily":"system-font"} -->
<p class="has-system-font-font-family" style="font-size:24px;font-style:normal;font-weight:700;line-height:1.3">500+</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","lineHeight":1.4,"fontStyle":"normal","fontWeight":"400"}},"fontFamily":"system-font"} -->
<p class="has-system-font-font-family" style="font-size:12px;font-style:normal;font-weight:400;line-height:1.4">Teachers</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"24px","lineHeight":"1.3","fontStyle":"normal","fontWeight":"700"}},"fontFamily":"system-font"} -->
<p class="has-system-font-font-family" style="font-size:24px;font-style:normal;font-weight:700;line-height:1.3">4.9</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","lineHeight":1.4,"fontStyle":"normal","fontWeight":"400"}},"fontFamily":"system-font"} -->
<p class="has-system-font-font-family" style="font-size:12px;font-style:normal;font-weight:400;line-height:1.4">Rating</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
',
);
