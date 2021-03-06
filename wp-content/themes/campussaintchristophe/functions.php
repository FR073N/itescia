<?php
/**
 * Campus Saint Christophe functions and definitions
 *
 * @package Campus Saint Christophe
 */

add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

function language_selector(){
	$languages = icl_get_languages('skip_missing=0&orderby=code');
	if(!empty($languages)){
			echo '<ul class="lang_sel_list">';
		foreach($languages as $l){
			echo '<li'. ($l['active']?' class="lang_sel_sel"':'') .'>';
			if(!$l['active']) echo '<a href="'.$l['url'].'">';
				echo ''.$l['language_code'].'';
			if(!$l['active']) echo '</a>';
				echo '</li>';
		}
	}
	echo '</ul>';
}


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Paramètres globaux du theme',
		'menu_title'	=> 'Paramètres du thème',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Réseaux sociaux',
		'menu_title'	=> 'Réseaux sociaux',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'campussaintchristophe_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function campussaintchristophe_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Campus Saint Christophe, use a find and replace
	 * to change 'campussaintchristophe' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'campussaintchristophe', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'campussaintchristophe' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'campussaintchristophe_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // campussaintchristophe_setup
add_action( 'after_setup_theme', 'campussaintchristophe_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function campussaintchristophe_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'campussaintchristophe' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'campussaintchristophe_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function campussaintchristophe_scripts() {
	wp_enqueue_style( 'campussaintchrstophe-main', get_template_directory_uri() . '/css/main.css' );



	wp_enqueue_script( 'campussaintchrstophe-jquery', get_template_directory_uri() . '/js/jquery-1.11.1.min.js', array(), '20120206', true );
	wp_enqueue_script( 'campussaintchrstophe-global', get_template_directory_uri() . '/js/core.js', array(), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'campussaintchristophe_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
