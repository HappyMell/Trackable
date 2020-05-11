<?php
/**
 * Theme functions and definitions
 */

 if ( ! function_exists( 'theme_setup' ) ) :
 /**
  * Sets up theme defaults and registers support for various WordPress features.
  *
  * Note that this function is hooked into the after_setup_theme hook, which
  * runs before the init hook. The init hook is too late for some features, such
  * as indicating support for post thumbnails.
  */
 function theme_setup() {
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

  // Enable custom menus
  // =======================
  add_theme_support( 'menus' );

 	// This theme uses wp_nav_menu() in one location.
 	register_nav_menus( array(
    // Example
		 'main-menu' => esc_html__( 'Main Menu', 'mellisa-theme' ),
		 'large-menu' => esc_html__( 'Large Menu', 'mellisa-theme' ),
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

 	// Add theme support for selective refresh for widgets.
 	add_theme_support( 'customize-selective-refresh-widgets' );
 }
 endif;
 add_action( 'after_setup_theme', 'theme_setup' );

 // Adds CSS
 // ============
 function theme_styles() {
   // Example with external URL
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
	
   // Example with internal file
	wp_enqueue_style( 'mainCSS', get_template_directory_uri() . '/css/style.min.css' );
	
	wp_enqueue_style( 'salCSS', get_template_directory_uri() . '/node_modules/sal.js/dist/sal.css' );
 }
 add_action( 'wp_enqueue_scripts', 'theme_styles');

 // Adds JS
 // ==========
 function theme_js() {
   // Example with external URL
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.5.0.min.js');
	wp_enqueue_script( 'jqueryeasing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js');

   // Example with internal file
	wp_enqueue_script( 'mainJS', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '', true);
	
	wp_enqueue_script( 'animationJS', get_template_directory_uri() . '/js/animation.js', array('jquery'), '', true);

	wp_enqueue_script( 'lottie', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.0/lottie.js' );

	wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');

	wp_enqueue_script( 'bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');

	wp_enqueue_script( 'salJS', get_template_directory_uri() . '/node_modules/sal.js/dist/sal.js', array('jquery'), '', true);
 }
 add_action( 'wp_enqueue_scripts', 'theme_js');

// Implement Additional files
//==========
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
* Load Custom Posts file
*/
require get_template_directory() . '/inc/custom-posts.php';

/**
* Load Custom Taxonomies file
*/
require get_template_directory() . '/inc/custom-taxonomies.php';

/**
* Where to edit login page and dashboard logo
*/
require get_template_directory() . '/inc/theme-appearance.php';


add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );

function wpse156165_menu_add_class( $atts, $item, $args ) {
    $class = 'js-scroll-trigger nav-link'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}



add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Header Settings'),
            'menu_title'    => __('Header Settings'),
            'menu_slug'     => 'header-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
		));
		
		$option_page = acf_add_options_page(array(
            'page_title'    => __('Footer Settings'),
            'menu_title'    => __('Footer Settings'),
            'menu_slug'     => 'footer-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}