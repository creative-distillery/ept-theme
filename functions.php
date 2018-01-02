<?php
/**
 * EPT functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package EPT
 */

if ( ! function_exists( 'ept_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ept_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on EPT, use a find and replace
	 * to change 'ept' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ept', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'ept' ),
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
	add_theme_support( 'custom-background', apply_filters( 'ept_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'ept_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ept_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ept_content_width', 640 );
}
add_action( 'after_setup_theme', 'ept_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ept_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ept' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ept' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ept_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ept_scripts() {

	wp_enqueue_style( 'ept-style', get_stylesheet_uri() );

	//wp_enqueue_style( 'tooltip', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.min.css');

	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style( 'jquary-ui-css', get_template_directory_uri() . '/js/jquery-ui.min.css');

	wp_enqueue_style( 'skeleton-css', get_template_directory_uri() . '/css/skeleton.css' );

	wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/css/styles.css' );

	//wp_enqueue_script( 'jquery', get_template_directory_uri() . '//code.jquery.com/jquery-3.1.0.min.js');
	//wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js');
//wp_enqueue_script( 'jquery' );
wp_enqueue_script( 'parallax-js', get_template_directory_uri() . '/js/parallax.min.js');

	//wp_enqueue_script( 'jquery-ui', '//code.jquery.com/ui/1.12.1/jquery-ui.min.js' );

	wp_enqueue_script( 'stripe-js', 'https://js.stripe.com/v2/' );

	wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', array(), '20151215', true );

	//wp_enqueue_script( 'ept-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	//wp_enqueue_script( 'ept-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ept_scripts' );

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


/*TINYMCE Styles*/

/**
 * Add styles/classes to the "Styles" drop-down
 */
add_filter( 'tiny_mce_before_init', 'fb_mce_before_init' );

function fb_mce_before_init( $settings ) {

    $style_formats = array(
        array(
            'title' => 'Callout',
            'selector' => 'p',
            'classes' => 'callout'
            )

    );

    $settings['style_formats'] = json_encode( $style_formats );

    return $settings;

}

// Remove WP version from head
remove_action( 'wp_head', 'wp_generator' );

// Remove WP version from css & scripts
function my_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) ) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
}
add_filter( 'style_loader_src', 'my_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'my_remove_wp_ver_css_js', 9999 );

// Remove WP version from RSS
add_filter( 'the_generator', '__return_empty_string' );

/*
function new_excerpt_more($more) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more', 21 );

function the_excerpt_more_link( $excerpt ){
    $post = get_post();
    $excerpt .= '<p><a href="'. get_permalink($post->ID) . '">Read More</a></p>';
    return $excerpt;
}
add_filter( 'the_excerpt', 'the_excerpt_more_link', 21 );

function wpse_allowedtags() {
    // Add custom tags to this string
        return '<script>,<style>,<br>,<em>,<i>,<ul>,<ol>,<li>,<a>,<p>,<img>,<video>,<audio>,<div>';
    }

		function improved_trim_excerpt($text) {
		        global $post;
		        if ( '' == $text ) {
		                $text = get_the_content('');
		                $text = apply_filters('the_content', $text);
		                $text = str_replace('\]\]\>', ']]&gt;', $text);
		                $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
		                $text = strip_tags($text);
		                $excerpt_length = 80;
		                $words = explode(' ', $text, $excerpt_length + 1);
		                if (count($words)> $excerpt_length) {
		                        array_pop($words);
		                        array_push($words, '[...]');
		                        $text = implode(' ', $words);
		                }
		        }
		        return $text;
		}
		remove_filter('get_the_excerpt', 'wp_trim_excerpt');
		add_filter('get_the_excerpt', 'improved_trim_excerpt');*/
