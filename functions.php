<?php
require_once get_theme_file_path( 'inc/register_block_patterns.php' );

if ( ! function_exists( 'edu_learn_setup' ) ) {
	function edu_learn_setup() {
		add_theme_support( 'editor-styles' );
	}
}
add_action( 'after_setup_theme', 'edu_learn_setup' );

function edu_learn_register_block_styles() {
	$block_styles = array(
		'core/button'                    => array(
			'secondary-button' => __( 'Secondary', 'edu-learn' ),
		),
	);
	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'edu_learn_register_block_styles' );
function edu_learn_register_acf_blocks() {
  register_block_type( __DIR__ . '/inc/blocks/teachers-list-body' );
	register_block_type( __DIR__ . '/inc/blocks/teachers-list-top' );
	register_block_type( __DIR__ . '/inc/blocks/courses-level-list' );
	register_block_type( __DIR__ . '/inc/blocks/courses-category-list' );
	register_block_type( __DIR__ . '/inc/blocks/form' );
}
add_action( 'init', 'edu_learn_register_acf_blocks' );

function edu_learn_enqueue_styles() {
	wp_enqueue_style('edu-learn-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));
	if ( is_page_template ('page-pricing') ) {
		wp_enqueue_style('pricing-page-css', get_template_directory_uri().'/assets/css/pricing-page.css');
	}
	if ( is_page_template ('page-all-courses') ) {
		wp_enqueue_style('courses-page-css', get_template_directory_uri().'/assets/css/courses-page.css');
	}
}
add_action( 'wp_enqueue_scripts', 'edu_learn_enqueue_styles' );

function edu_learn_filter_scripts() {
	if ( is_page_template ('page-request') ) {
		wp_enqueue_script('constants', get_template_directory_uri() . '/assets/js/constants.js', null, null, true );
	}
	if ( is_page_template ('page-all-courses') ) {
    wp_enqueue_script( 'courses', get_template_directory_uri() . '/assets/js/courses.js', null, null, true);
    wp_localize_script( 'courses', 'ajax',
      array(
        'url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('ajax-nonce')
      )
    );
	}
}
add_action( 'wp_enqueue_scripts', 'edu_learn_filter_scripts' );

function edu_learn_get_custom_logo( $html ) {
	if ( ! empty( $html ) ) {
		return $html;
	}

	if ( file_exists( get_template_directory() . '/assets/images/logo.svg' ) ) {
		$html = sprintf(
			'<img src="%2$s" class="custom-logo" alt="%3$s" width="24" height="24" />',
			esc_url( home_url( '/' ) ),
			esc_url( get_template_directory() . '/assets/images/logo.svg' ),
			esc_attr( get_bloginfo( 'name' ) )
		);

	return $html;
	}
}
add_filter( 'get_custom_logo', 'edu_learn_get_custom_logo' );

function edu_learn_default_tagline( $blogdescription ) {
	if ( empty( trim( $blogdescription ) ) ) {
		return 'Online education platform for learning languages and professional skills.';
	}
	return $blogdescription;
}
add_filter( 'option_blogdescription', 'edu_learn_default_tagline' );

if( wp_doing_ajax() ) {
  add_action( 'wp_ajax_request', 'get_filter' );
  add_action( 'wp_ajax_nopriv_request', 'get_filter' );
}
function get_filter() {
	if( ! wp_verify_nonce( $_POST['nonce'], 'ajax-nonce' ) ) die();

	$level = $_POST['level'] ?? 'all-levels';
	$cat = $_POST['cat'] ?? 'all-categories';

	$courses_posts = get_posts( array(
		'numberposts' => 9,
		'post_type'   => 'course',
		'order'=> 'ASC',
		'orderby' => 'date',
			'tax_query' => [
			'relation' => 'AND',
			[
				'taxonomy' => 'level',
				'field' => 'slug',
				'terms' => $level
			],
			[
				'taxonomy' => 'course-category',
				'field' => 'slug',
				'terms' => $cat
			]
  	]
	) );

	global $post;

	foreach( $courses_posts as $post ){
		setup_postdata( $post );
		if (get_the_terms($post->ID, 'level')[0]->slug == 'all-levels') {
			$term_name_level = get_the_terms($post->ID, 'level')[1]->name;
		} else {
			$term_name_level = get_the_terms($post->ID, 'level')[0]->name;
		}
		$term_name_category = get_the_terms($post->ID, 'course-category')[1]->name;

		get_template_part( 'template-parts/course-list', 'loop', ['post' => $post, 'level' => $term_name_level, 'category' => $term_name_category ] );
	}
	wp_reset_postdata();
  wp_die();
}

function enqueue_block_dashicons() {
	wp_enqueue_style( 'dashicons' );
}
add_action( 'enqueue_block_assets', 'enqueue_block_dashicons' );
add_filter( 'emoji_svg_url', '__return_false' );