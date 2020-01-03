<?php
/**
 * bimhome functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bimhome
 */

if ( ! function_exists( 'bimhome_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bimhome_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bimhome, use a find and replace
		 * to change 'bimhome' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bimhome', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'bimhome' ),
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
		add_theme_support( 'custom-background', apply_filters( 'bimhome_custom_background_args', array(
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
add_action( 'after_setup_theme', 'bimhome_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bimhome_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bimhome_content_width', 640 );
}
add_action( 'after_setup_theme', 'bimhome_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bimhome_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bimhome' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bimhome' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bimhome_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bimhome_scripts() {
	wp_enqueue_style( 'bimhome-style', get_stylesheet_uri() );

	wp_enqueue_style('style', get_template_directory_uri() . '/libs/css/style.css', [], '1.0.2');
	wp_enqueue_style('fix', get_template_directory_uri() . '/libs/css/fix.css', [], '1.0.2');
	wp_enqueue_style('reponsive', get_template_directory_uri() . '/libs/css/responsive.css', [], '1.0.2');
	wp_enqueue_style('fontPlayfair', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap', [], '1.0.2');

	wp_enqueue_script( 'jquery-2.1.4', get_template_directory_uri() . '/libs/vendor/jquery-2.1.4.js', array(), '20201010', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/libs/vendor/bootstrap/bootstrap.min.js', array(), '20201010', true );
	wp_enqueue_script( 'themepunch-tools', get_template_directory_uri() . '/libs/vendor/revolution/jquery.themepunch.tools.min.js', array(), '20201010', true );
	wp_enqueue_script( 'themepunch-revolution', get_template_directory_uri() . '/libs/vendor/revolution/jquery.themepunch.revolution.min.js', array(), '20201010', true );
	wp_enqueue_script( 'revolution-slideanims', get_template_directory_uri() . '/libs/vendor/revolution/revolution.extension.slideanims.min.js', array(), '20201010', true );

	wp_enqueue_script( 'revolution-layeranimation', get_template_directory_uri() . '/libs/vendor/revolution/revolution.extension.layeranimation.min.js', array(), '20201010', true );

	wp_enqueue_script( 'revolution-navigation', get_template_directory_uri() . '/libs/vendor/revolution/revolution.extension.navigation.min.js', array(), '20201010', true );

	wp_enqueue_script( 'revolution-kenburn', get_template_directory_uri() . '/libs/vendor/revolution/revolution.extension.kenburn.min.js', array(), '20201010', true );

	wp_enqueue_script( 'revolution-actions', get_template_directory_uri() . '/libs/vendor/revolution/revolution.extension.actions.min.js', array(), '20201010', true );

	wp_enqueue_script( 'revolution-video', get_template_directory_uri() . '/libs/vendor/revolution/revolution.extension.video.min.js', array(), '20201010', true );

	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/libs/vendor/owl-carousel/owl.carousel.min.js', array(), '20201010', true );

	wp_enqueue_script( 'countTo', get_template_directory_uri() . '/libs/vendor/jquery.countTo.js', array(), '20201010', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/libs/vendor/fancy-box/jquery.fancybox.pack.js', array(), '20201010', true );
	wp_enqueue_script( 'validate', get_template_directory_uri() . '/libs/vendor/contact-form/validate.js', array(), '20201010', true );

	wp_enqueue_script( 'form', get_template_directory_uri() . '/libs/vendor/contact-form/jquery.form.js', array(), '20201010', true );

	wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/libs/vendor/jquery.mixitup.min.js', array(), '20201010', true );

	wp_enqueue_script( 'theme', get_template_directory_uri() . '/libs/js/theme.js', array(), '20201010', true );


	wp_enqueue_script( 'bimhome-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bimhome-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bimhome_scripts' );


/**
 * Code star
 */
require get_template_directory() . '/frameworks/codestar/codestar-framework.php';
require get_template_directory() . '/frameworks/codestar/config/admin.php';

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

