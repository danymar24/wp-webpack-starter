<?php

if ( ! function_exists( 'sparxoo_dev_setup' ) ) :

function sparxoo_dev_setup() {

	load_theme_textdomain( 'sparxoo-dev', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	// Nav Theme Locations
	register_nav_menus( array(
	    'top-header-menu' => __( 'Top Header Menu', 'sparxoo-dev' ),
	    'header-menu' => __( 'Header Menu', 'sparxoo-dev' ),
	    'mobile-menu' => __( 'Mobile Menu', 'sparxoo-dev' ),
	    'footer-menu' => __( 'Footer Menu', 'sparxoo-dev' )
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sparxoo_dev_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'sparxoo_dev_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sparxoo_dev_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sparxoo_dev_content_width', 640 );
}
add_action( 'after_setup_theme', 'sparxoo_dev_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sparxoo_dev_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sparxoo-dev' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sparxoo-dev' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sparxoo_dev_widgets_init' );


// Enqueue scripts and styles.
function sparxoo_dev_scripts() {
	wp_enqueue_style( 'bundle-css', get_stylesheet_uri(), array(), '1' );
  //wp_enqueue_style( 'bundle-css', get_template_directory_uri() . '/public/css/style.css' );

  // Load jQuery via CDN
	wp_enqueue_script( 'jq','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '1', true );
  // Load build file rendered by Webpack.config.js
	wp_enqueue_script( 'bundle-js', get_template_directory_uri() . '/public/js/bundle.js', array(), '1', true );
  // Load comments script when single & enabled
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sparxoo_dev_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/jetpack.php';

// Removes default WP junk from header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3 );
// Removes prev and next article links
add_filter( 'index_rel_link', '__return_false' );
add_filter( 'parent_post_rel_link', '__return_false' );
add_filter( 'start_post_rel_link', '__return_false' );
add_filter( 'previous_post_rel_link', '__return_false' );
add_filter( 'next_post_rel_link', '__return_false' );
