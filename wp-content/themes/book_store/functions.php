<?php
/**
 * Book functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Book
 */

if ( ! function_exists( 'book_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function book_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Book, use a find and replace
		 * to change 'book' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'book', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'book' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'book_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		add_image_size( 'square-150', 150, 150, true );
	}
endif;
add_action( 'after_setup_theme', 'book_setup' );

/**
 * Enqueue scripts and styles.
 */
function book_scripts() {

	wp_enqueue_style( 'bootstrap-min' , get_template_directory_uri().'/assets/css/bootstrap.min.css' , array(), '3.3.7' , 'all');
	if(!is_404()){
		wp_enqueue_style( 'book-style', get_stylesheet_uri() );
        wp_enqueue_style( 'krishna-css' , get_template_directory_uri().'/assets/css/style.css' , array(), '1.0.0' , 'all');
        
		wp_enqueue_script( 'book-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);
		wp_enqueue_script( 'jquery-custom', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '20151215', true);
		wp_enqueue_script( 'bootstrap-min-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20151215', true);
		wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/js/script.js', array(), '20151215', true);
		wp_enqueue_script( 'book-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );	
	}


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'book_scripts' );

function book_post_type() {
    register_post_type('book', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array('slug' => 'books'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Books', 
            'add_new_item' => 'Add New Book',
            'edit_item' => 'Edit Book',
            'all_items' => 'All Books',
            'singular_name' => 'Book'
        ),
        'description' => "Add Books",
        'menu_icon' => 'dashicons-book-alt'
    ));
}
add_action('init', 'book_post_type');