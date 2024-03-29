<?php
/**
 * Theme functions and definitions
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package Magazine_Power
 */

if ( ! function_exists( 'magazine_power_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function magazine_power_setup() {
		// Make theme available for translation.
		load_theme_textdomain( 'magazine-power' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'magazine-power-thumb', 370, 250 );
		add_image_size( 'magazine-power-large', 800, 600, true );

		// Register menu locations.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'magazine-power' ),
				'top'     => esc_html__( 'Top Menu', 'magazine-power' ),
				'footer'  => esc_html__( 'Footer Menu', 'magazine-power' ),
				'social'  => esc_html__( 'Social Menu', 'magazine-power' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'search-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'magazine_power_custom_background_args',
				array(
					'default-color' => 'f0f3f5',
					'default-image' => '',
				)
			)
		);

		// Enable support for selective refresh of widgets in Customizer.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Enable support for custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'width'       => 300,
				'height'      => 300,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Load default block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Enable support for footer widgets.
		add_theme_support( 'footer-widgets', 4 );

		// Load Supports.
		require get_template_directory() . '/inc/support.php';
	}

endif;

add_action( 'after_setup_theme', 'magazine_power_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function magazine_power_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'magazine_power_content_width', 640 );
}

add_action( 'after_setup_theme', 'magazine_power_content_width', 0 );

/**
 * Register widget area.
 */
function magazine_power_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Primary Sidebar', 'magazine-power' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your Primary Sidebar.', 'magazine-power' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title"><span>',
			'after_title'   => '</span></h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Secondary Sidebar', 'magazine-power' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here to appear in your Secondary Sidebar.', 'magazine-power' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title"><span>',
			'after_title'   => '</span></h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Front Page Top Widget Area', 'magazine-power' ),
			'id'            => 'sidebar-front-page-top-widget-area',
			'description'   => esc_html__( 'Add widgets here to appear in Front Page Top Widget Area.', 'magazine-power' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title"><span>',
			'after_title'   => '</span></h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Front Page Middle Widget Area', 'magazine-power' ),
			'id'            => 'sidebar-front-page-widget-area',
			'description'   => esc_html__( 'Add widgets here to appear in Front Page Middle Widget Area.', 'magazine-power' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title"><span>',
			'after_title'   => '</span></h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Front Page Middle Right Widget Area', 'magazine-power' ),
			'id'            => 'sidebar-front-page-middle-right-widget-area',
			'description'   => esc_html__( 'Add widgets here to appear in Front Page Middle Right Widget Area.', 'magazine-power' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title"><span>',
			'after_title'   => '</span></h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Front Page Bottom Widget Area', 'magazine-power' ),
			'id'            => 'sidebar-front-page-bottom-widget-area',
			'description'   => esc_html__( 'Add widgets here to appear in Front Page Bottom Widget Area.', 'magazine-power' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title"><span>',
			'after_title'   => '</span></h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Header Right Widget Area', 'magazine-power' ),
			'id'            => 'header-right',
			'description'   => esc_html__( 'Add widgets here to appear in Header Right Widget Area.', 'magazine-power' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title"><span>',
			'after_title'   => '</span></h2>',
		)
	);
}

add_action( 'widgets_init', 'magazine_power_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function magazine_power_scripts() {
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_style( 'magazine-power-font-awesome', get_template_directory_uri() . '/third-party/font-awesome/css/all' . $min . '.css', '', '5.8.1' );

	wp_enqueue_style( 'magazine-power-google-fonts', magazine_power_fonts_url(), array(), '1.0.0' );

	wp_enqueue_style( 'jquery-sidr', get_template_directory_uri() . '/third-party/sidr/css/jquery.sidr.dark' . $min . '.css', '', '2.2.1' );

	wp_enqueue_style( 'jquery-slick', get_template_directory_uri() . '/third-party/slick/slick' . $min . '.css', '', '1.8.1' );

	wp_enqueue_style( 'magazine-power-style', get_stylesheet_uri(), array(), '1.0.0' );

	wp_enqueue_script( 'magazine-power-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix' . $min . '.js', array(), '20130115', true );

	wp_enqueue_script( 'jquery-sidr', get_template_directory_uri() . '/third-party/sidr/js/jquery.sidr' . $min . '.js', array( 'jquery' ), '2.2.1', true );

	wp_enqueue_script( 'jquery-easytabs', get_template_directory_uri() . '/third-party/easytabs/js/jquery.easytabs' . $min . '.js', array( 'jquery' ), '3.2.0', true );

	wp_enqueue_script( 'jquery-easy-ticker', get_template_directory_uri() . '/third-party/ticker/jquery.easy-ticker' . $min . '.js', array( 'jquery' ), '2.0', true );

	wp_enqueue_script( 'jquery-slick', get_template_directory_uri() . '/third-party/slick/slick' . $min . '.js', array( 'jquery' ), '1.8.1', true );

	wp_enqueue_script( 'magazine-power-custom', get_template_directory_uri() . '/js/custom' . $min . '.js', array( 'jquery' ), '1.0.0', true );

	$custom_args = array(
		'go_to_top_status' => ( true === magazine_power_get_option( 'go_to_top' ) ) ? 1 : 0,
	);

	wp_localize_script( 'magazine-power-custom', 'magazinePowerCustomOptions', $custom_args );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'magazine_power_scripts' );

/**
 * Enqueue admin scripts and styles.
 *
 * @since 1.0.0
 *
 * @param string $hook Hook suffix for the current admin page.
 */
function magazine_power_admin_scripts( $hook ) {
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	if ( in_array( $hook, array( 'post.php', 'post-new.php' ), true ) ) {
		wp_enqueue_style( 'magazine-power-metabox', get_template_directory_uri() . '/css/metabox' . $min . '.css', '', '1.0.0' );
		wp_enqueue_script( 'magazine-power-metabox', get_template_directory_uri() . '/js/metabox' . $min . '.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-tabs' ), '1.0.0', true );
	}

	if ( 'widgets.php' === $hook ) {
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_script( 'wp-color-picker' );
		wp_enqueue_media();
		wp_enqueue_style( 'magazine-power-custom-widgets-style', get_template_directory_uri() . '/css/widgets' . $min . '.css', array(), '1.0.0' );
		wp_enqueue_script( 'magazine-power-custom-widgets', get_template_directory_uri() . '/js/widgets' . $min . '.js', array( 'jquery' ), '1.0.0', true );
	}
}

add_action( 'admin_enqueue_scripts', 'magazine_power_admin_scripts' );

/**
 * Load init.
 */
require_once get_template_directory() . '/inc/init.php';
