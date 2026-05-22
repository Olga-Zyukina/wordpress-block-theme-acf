<?php
/**
 * Block patterns
 *
 * @package edu-learn
 * @since 1.0.0
 */

/** Register block patterns. */
function edu_learn_register_block_patterns() {
	/** Block pattern categories. */
	$block_pattern_categories = apply_filters(
		'edu_learn_block_pattern_categories',
		array(
			'edu-learn-404'          => array(
				'label' => __( 'EduLearn - 404', 'edu-learn' ),
			),
			'edu-learn-archive'      => array(
				'label' => __( 'EduLearn - Archive', 'edu-learn' ),
			),
			'edu-learn-all-courses'     => array(
				'label' => __( 'EduLearn - All Courses', 'edu-learn' ),
			),
			'edu-learn-all-teachers'  => array(
				'label' => __( 'EduLearn - All teachers', 'edu-learn' ),
			),
			'edu-learn-popular-courses'      => array(
				'label' => __( 'EduLearn - Popular Courses', 'edu-learn' ),
			),
			'edu-learn-cta'          => array(
				'label' => __( 'EduLearn - CTA', 'edu-learn' ),
			),
			'edu-learn-faq'          => array(
				'label' => __( 'EduLearn - FAQs', 'edu-learn' ),
			),
			'edu-learn-features'     => array(
				'label' => __( 'EduLearn - Features', 'edu-learn' ),
			),
			'edu-learn-4-columns'  => array(
				'label' => __( 'EduLearn - 4 Columns', 'edu-learn' ),
			),
			'edu-learn-hero'         => array(
				'label' => __( 'EduLearn - Hero', 'edu-learn' ),
			),
			'edu-learn-home'         => array(
				'label' => __( 'EduLearn - Home', 'edu-learn' ),
			),
			'edu-learn-no-title'     => array(
				'label' => __( 'EduLearn - No Title', 'edu-learn' ),
			),
			'edu-learn-pages'        => array(
				'label' => __( 'EduLearn - Pages', 'edu-learn' ),
			),
			'edu-learn-pricing'      => array(
				'label' => __( 'EduLearn - Pricing', 'edu-learn' ),
			),
			'edu-learn-request'      => array(
				'label' => __( 'EduLearn - Request', 'edu-learn' ),
			),
			'edu-learn-reviews'      => array(
				'label' => __( 'EduLearn - Reviews', 'edu-learn' ),
			),
			'edu-learn-search'       => array(
				'label' => __( 'EduLearn - Search', 'edu-learn' ),
			),
			'edu-learn-single-post'  => array(
				'label' => __( 'EduLearn - Single Post', 'edu-learn' ),
			),
			'edu-learn-table'  => array(
				'label' => __( 'EduLearn - Table', 'edu-learn' ),
			),
			'edu-learn-title'  => array(
				'label' => __( 'EduLearn - Title', 'edu-learn' ),
			)
		)
	);
	/** Register pattern categories. */
	if ( ! empty( $block_pattern_categories ) ) {
		foreach ( $block_pattern_categories as $category_name => $category_properties ) {
			register_block_pattern_category(
				$category_name,
				$category_properties
			);
		}
	}

	/** Block patterns list. */
	$block_patterns = apply_filters(
		'edu_learn_block_patterns',
		array(
			'404/default',
			'all-courses/default',
			'all-teachers/default',
			'archive/default',
			'cta/default',
			'cta-teachers/default',
			'cta-pricing/default',
			'faq/default',
			'features/default',
			'four-columns/default',
			'hero/default',
			'home/default',
			'no-title/default',
			'pages/default',
			'popular-courses/default',
			'pricing/default',
			'request/default',
			'reviews/default',
			'search/default',
			'single-post/default',
			'table/default',
			'title/default',
			'title-courses/default',
			'title-pricing/default',
		)
	);

	if ( ! empty( $block_patterns ) ) {
		foreach ( $block_patterns as $block_pattern ) {
			$pattern_file = get_theme_file_path( "inc/patterns/$block_pattern.php" );
			if ( file_exists( $pattern_file ) ) {
				$block_pattern_properties = require $pattern_file;
				register_block_pattern(
					"edu-learn/$block_pattern",
					$block_pattern_properties
				);
			}
		}
	}
}

add_action( 'init', 'edu_learn_register_block_patterns' );
