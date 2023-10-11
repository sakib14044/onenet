<?php 

/**
 * onenet's functions and definitions
 *
 * @package onenet
 * @since onenet 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's
 * design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 800; /* pixels */
}


if ( ! function_exists( 'onenet_theme_serup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme
	 * hook, which runs before the init hook. The init hook is too late
	 * for some features, such as indicating support post thumbnails.
	 */
	function onenet_theme_serup() {

		/**
		 * Make theme available for translation.
		 * Translations can be placed in the /languages/ directory.
		 */
		load_theme_textdomain( 'onenet', get_template_directory() . '/languages' );

		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus( array(
			'primary'   => __( 'Primary Menu', 'onenet' ),
			'topbar'    => __( 'Topbar Menu', 'onenet' ),
			'footer'    => __( 'Footer Menu', 'onenet' ),
		) );
		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
endif; // onenet_theme_serup
add_action( 'after_setup_theme', 'onenet_theme_serup' );





// Custom Logo Setup Start///
function onenet_custom_logo_setup() {
	$logo = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $logo );
}
add_action( 'after_setup_theme', 'onenet_custom_logo_setup' );
// Custom Logo Setup end///

// Custom Menu arrow bottom Icon Start
function add_arrow_to_menu_item($title, $item, $args, $depth) {
    if (in_array('menu-item-has-children', $item->classes)) {
        $title = $title . '<span class="dashicons dashicons-arrow-down-alt2"></span>';
    }
    return $title;
}
add_filter('nav_menu_item_title', 'add_arrow_to_menu_item', 10, 4);


function enqueue_dashicons_in_frontend() {
    wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'enqueue_dashicons_in_frontend');

// CCustom Menu arrow bottom Icon  end


// widgets Start

function onenet_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'onenet' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	}

add_action( 'widgets_init', 'onenet_widgets_init' );


// widgets end

// Custom Header Start

// function themename_custom_header_setup() {
// 	$args = array(
// 		'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
// 		'default-text-color' => '000',
// 		'width'              => 1000,
// 		'height'             => 250,
// 		'flex-width'         => true,
// 		'flex-height'        => true,
// 	);
// 	add_theme_support( 'custom-header', $args );
// }
// add_action( 'after_setup_theme', 'themename_custom_header_setup' );
// Custom Header end



// Banner Start 
// function custom_banner_post_type() {
//     register_post_type('banners', array(
//         'public'   => true,
//         'label'    => 'Banners',
//         'supports' => array('title', 'thumbnail', 'excerpt')
//     ));
// }
// add_action('init', 'custom_banner_post_type');

// Banner End 

/**
 * Proper way to enqueue scripts and styles.
 */
function onenet_theme_name_scripts() {
	wp_enqueue_style( 'main_css', get_stylesheet_uri().'/style.css' );

		// <!-- Web Fonts -->
	wp_enqueue_style( 'open-sans-google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext', array(), null );

		// Enqueue PT Serif font
	wp_enqueue_style( 'pt-serif-google-fonts', 'http://fonts.googleapis.com/css?family=PT+Serif', array(), null );

	// <!-- Bootstrap core CSS -->
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.css' );

	// <!-- Font Awesome CSS -->
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 

	// <!-- Fontello CSS -->
	wp_enqueue_style( 'fontello', get_template_directory_uri().'/assets/fonts/fontello/css/fontello.css' );

	// <!-- Plugins -->
	wp_enqueue_style( 'settings', get_template_directory_uri().'/assets/plugins/rs-plugin/css/settings.css' );
	wp_enqueue_style( 'extralayers', get_template_directory_uri().'/assets/plugins/rs-plugin/css/extralayers.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri().'/assets/plugins/magnific-popup/magnific-popup.css' );
	wp_enqueue_style( 'animations', get_template_directory_uri().'/assets/css/animations.css' );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri().'/assets/plugins/owl-carousel/owl.carousel.css' );

	// <!-- iDea core CSS file -->
	wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.css' );

	// <!-- Style Switcher Styles (Remove these two lines) -->
	wp_enqueue_style( 'style-switcher', get_template_directory_uri().'/assets/style-switcher/style-switcher.css' );

	// <!-- Custom css -->
	wp_enqueue_style( 'custom', get_template_directory_uri().'/assets/css/custom.css' );



	// script Srart
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/plugins/jquery.min.js' );
	wp_enqueue_script( 'bootstrap-jquery', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js' );
	wp_enqueue_script( 'style-switcher-jquery', get_template_directory_uri() . '/assets/style-switcher/style-switcher.js' );

	// <!-- Modernizr javascript -->
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/plugins/modernizr.js' );

	// <!-- jQuery REVOLUTION Slider  -->
	wp_enqueue_script( 'tools', get_template_directory_uri() . '/assets/plugins/rs-plugin/js/jquery.themepunch.tools.min.js' );
	wp_enqueue_script( 'revolution', get_template_directory_uri() . '/assets/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js' );

// <!-- Isotope javascript -->
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/plugins/isotope/isotope.pkgd.min.js' );

	// <!-- Owl carousel javascript -->
	wp_enqueue_script( 'owl-carousel-jquery', get_template_directory_uri() . '/assets/plugins/owl-carousel/owl.carousel.js' );

	// <!-- Magnific Popup javascript -->
	wp_enqueue_script( 'magnific-popup-jquery', get_template_directory_uri() . '/assets/plugins/magnific-popup/jquery.magnific-popup.min.js' );

	// <!-- Appear javascript -->
	wp_enqueue_script( 'appear', get_template_directory_uri() . '/assets/plugins/jquery.appear.js' );
	
	// <!-- Count To javascript -->
	wp_enqueue_script( 'countTo', get_template_directory_uri() . '/assets/plugins/jquery.countTo.js' );

	// <!-- Parallax javascript -->
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/plugins/jquery.parallax-1.1.3.js' );

	// <!-- Contact form -->
	wp_enqueue_script( 'validate', get_template_directory_uri() . '/assets/plugins/jquery.validate.js' );

	// <!-- SmoothScroll javascript -->
	wp_enqueue_script( 'browser', get_template_directory_uri() . '/assets/plugins/jquery.browser.js' );
	wp_enqueue_script( 'SmoothScroll', get_template_directory_uri() . '/assets/plugins/SmoothScroll.js' );


	// <!-- Initialization of Plugins -->
	wp_enqueue_script( 'template', get_template_directory_uri() . '/assets/js/template.js' );

	// <!-- Custom Scripts -->
	wp_enqueue_script( 'custom-jquery', get_template_directory_uri() . '/assets/js/custom.js' );




	

}
add_action( 'wp_enqueue_scripts', 'onenet_theme_name_scripts' );



// Redux Frame Work integration Start
 // require_once get_template_directory() . '/lib/redux-framework-master/ReduxCore/framework.php';
 // require_once get_template_directory() . '/lib/redux-framework-master/sample/sample-config.php';
 // require_once get_template_directory() . '/lib/redux-framework/redux-core/framework.php';
 // require_once get_template_directory() . '/lib/redux-framework/sample/sample-config.php';


// require_once get_template_directory(). '/lib/redux-core/framework.php';
// require_once get_template_directory(). '/lib/sample/config.php';



// Redux Frame Work integration end

// global $redux_demo;


?>