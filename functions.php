<?php
/**
 * autoglass functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package autoglass
 */

if ( ! function_exists( 'autoglass_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function autoglass_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on autoglass, use a find and replace
		 * to change 'autoglass' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'autoglass', get_template_directory() . '/languages' );

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
			'main-menu' => esc_html__( 'Main Menu', 'autoglass' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'autoglass' ),
			'side-menu' => esc_html__( 'Sidebar Menu', 'autoglass' ),
		) );
		

		/* ACF OPTIONS PAGE */
		if(function_exists('acf_add_options_page')) {
			$option_page = acf_add_options_page(
				array(
					'page_title'  => 'Theme Settings',
					'menu_title'  => 'Theme Settings',
					'menu_slug'   => 'theme-settings',
					'capability'  => 'edit_posts',
					'redirect'    => true,
					'position' => 61,
					'icon_url'    => 'dashicons-layout'
				)
			);
		}


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
		add_theme_support( 'custom-background', apply_filters( 'autoglass_custom_background_args', array(
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
	}
endif;
add_action( 'after_setup_theme', 'autoglass_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function autoglass_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'autoglass_content_width', 640 );
}
add_action( 'after_setup_theme', 'autoglass_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function autoglass_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget', 'autoglass' ),
		'id'            => 'footer-widget',
		'description'   => esc_html__( 'Add Footer widgets here.', 'autoglass' ),
		'before_widget' => '<div class="footer-reparation">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'autoglass_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function autoglass_scripts() {
	
	  wp_enqueue_style( 'autoglass-vente_vehicules', get_template_directory_uri() . '/css/vente_vehicules.1.min.css');
	
	wp_enqueue_style( 'autoglass-reseau_refonte', get_template_directory_uri() . '/css/reseau_refonte.1.min.css');
	
	
	  
	wp_enqueue_style( 'autoglass-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'autoglass-reseau_refontejs', get_template_directory_uri() . '/js/reseau_refonte.1.min.js', '', '', true );
	
	wp_enqueue_script( 'autoglass-vljsa', get_template_directory_uri() . '/js/vl.1.min.js', '', '', false );
   
	
	
	
	
	
	//wp_enqueue_style( 'autoglass-vl', get_template_directory_uri() . '/css/vl.1.min.css');
	

	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'autoglass_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

