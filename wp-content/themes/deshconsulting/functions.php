<?php
/**
 * Deshconsulting functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Deshconsulting
 */

define('CSS_PATH', get_template_directory_uri() . '/assets/css');
define('js_path', get_template_directory_uri() . '/assets/js');
define('IMAGES_PATH', get_template_directory_uri() . '/assets/images');

if ( ! function_exists( 'deshconsulting_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function deshconsulting_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Deshconsulting, use a find and replace
		 * to change 'deshconsulting' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'deshconsulting', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'deshconsulting' ),
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
		add_theme_support( 'custom-background', apply_filters( 'deshconsulting_custom_background_args', array(
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
add_action( 'after_setup_theme', 'deshconsulting_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function deshconsulting_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'deshconsulting_content_width', 640 );
}
add_action( 'after_setup_theme', 'deshconsulting_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function deshconsulting_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'deshconsulting' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'deshconsulting' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'deshconsulting_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function deshconsulting_scripts() {
	wp_enqueue_style( 'deshconsulting-style', get_stylesheet_uri() );

	wp_enqueue_style( 'des-Mont', 'https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900' );
  	wp_enqueue_style( 'des-serrat', 'https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700' );
  	wp_enqueue_style( 'des-Roboto', 'https://fonts.googleapis.com/css?family=Roboto' );
  	wp_enqueue_style( 'des-cdnjs', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' );
  	wp_enqueue_style( 'des-cloudflare', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
  	wp_enqueue_style( 'des-libs', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css' );
  	wp_enqueue_style( 'des-maxcdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css' );
  	wp_enqueue_style( 'des-font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
  	wp_enqueue_style( 'des-main', CSS_PATH . '/main.css' );
  	wp_enqueue_style( 'des-responsive', CSS_PATH . '/responsive.css' );


	wp_enqueue_script( 'deshconsulting-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'des-ajax', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array('jquery'), '2.6.2', true );
	wp_enqueue_script( 'des-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', array('jquery'), '2.6.2', true );
	wp_enqueue_script( 'des-maxcdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array('jquery'), '2.6.2', true );
	wp_enqueue_script( 'des-owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), '2.6.2', true );

	wp_enqueue_script( 'deshconsulting-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'deshconsulting-main-fix', js_path . '/main.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'deshconsulting_scripts' );

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

/**
 * VTD Framework - Theme Options
 */
require get_parent_theme_file_path( '/vtd-framework/theme_option/option.php' );

/**
 * VTD Framework - Theme Functions
 */
require get_parent_theme_file_path( '/vtd-framework/theme-functions.php' );

/**
 * VTD Framework - NAV Walker
 */
require get_parent_theme_file_path( '/vtd-framework/wp_bootstrap_navwalker.php' );