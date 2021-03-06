<?php
/**
 * President-Sparrow functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package President-Sparrow
 */

if ( ! function_exists( 'sparrow_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sparrow_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on President-Sparrow, use a find and replace
	 * to change 'sparrow' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'sparrow', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'sparrow' ),
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
	add_theme_support( 'custom-background', apply_filters( 'sparrow_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'sparrow_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sparrow_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sparrow_content_width', 640 );
}
add_action( 'after_setup_theme', 'sparrow_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sparrow_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sparrow' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sparrow' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sparrow_widgets_init' );



// Bootstrap files have been linked 
function sopcResources() {
  wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.0.1', true );
  wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '3.0.1', 'all' );
  wp_enqueue_script( 'bootstrap-js' );
  wp_enqueue_style( 'bootstrap-css' );
 
}

add_action('wp_enqueue_scripts', 'sopcResources');
remove_filter('the_content', 'wpautop');


/**
 * Enqueue scripts and styles.
 */
function sparrow_scripts() {
	wp_enqueue_style( 'sparrow-style', get_stylesheet_uri() );

	wp_enqueue_script( 'sparrow-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'sparrow-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sparrow_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



// Add latest callout section to admin apperance cutomize screen
function awesome_latest_callout($wp_customize){
	$wp_customize->add_section('aw_latest-callout-section',array(
		'title' => 'Latest Callout',

	));

	$wp_customize->add_setting('aw-latest-callout-display',array(
		'default' => 'Yes'

	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'aw-latest-callout-display-control',array(
		'label' => 'Display this section?',
		'section' => 'aw_latest-callout-section',
		'settings' => 'aw-latest-callout-display',
		'type' => 'select',
		'choices' => array('No' => 'No', 'Yes' => 'Yes')


	)));





	$wp_customize->add_setting('aw-latest-callout-heading',array(
		'default' => 'Example Headline'

	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'aw-latest-callout-headline-control',array(
		'label' => 'Headline',
		'section' => 'aw_latest-callout-section',
		'settings' => 'aw-latest-callout-heading'


	)));



	$wp_customize->add_setting('aw-latest-callout-text',array(
		'default' => 'Example Paragraph!'

	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'aw-latest-callout-text-control',array(
		'label' => 'text',
		'section' => 'aw_latest-callout-section',
		'settings' => 'aw-latest-callout-text',
		'type' => 'textarea',


	)));



	$wp_customize->add_setting('aw-latest-callout-link'); 

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'aw-latest-callout-link-control',array(
		'label' => 'Link',
		'section' => 'aw_latest-callout-section',
		'settings' => 'aw-latest-callout-link',
		'type' => 'dropdown-pages',


	)));


	$wp_customize->add_setting('aw-latest-callout-image'); 

	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'aw-latest-callout-image-control',array(
		'label' => 'Image',
		'section' => 'aw_latest-callout-section',
		'settings' => 'aw-latest-callout-image',
		'width' => 1000,
		'height' => 680,


	)));
}

add_action('customize_register','awesome_latest_callout');





