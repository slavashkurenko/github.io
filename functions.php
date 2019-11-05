<?php

function test_scripts() {
	

	wp_enqueue_style( 'test-style', get_stylesheet_uri() );
	wp_enqueue_style( 'test-gfont', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' );
	wp_enqueue_style( 'test-font', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'test-animate', get_template_directory_uri() . '/css/animate.min.css' );
	wp_enqueue_style( 'test-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'test-carousel', get_template_directory_uri() . '/css/carousel.css' );
	wp_enqueue_style( 'test-isotope', get_template_directory_uri() . '/css/isotope/style.css' );
	wp_enqueue_style( 'test-responsive', get_template_directory_uri() . '/css/responsive.css' );


	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.12.3.min.js', array(), '', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(jquery), '', true );
	wp_enqueue_script( 'jquery.counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(jquery), '', true );
	wp_enqueue_script( 'backtotop', get_template_directory_uri() . '/js/backtotop.js', array(jquery, scrollTo, localScroll, jquery.counterup), '', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(jquery), '', true );
	wp_enqueue_script( 'gmaps', get_template_directory_uri() . '/js/gmaps.min.js', array(jquery), '', true );
	wp_enqueue_script( 'localScroll', get_template_directory_uri() . '/js/jquery.localScroll.min.js', array(jquery), '', true );
	wp_enqueue_script( 'scrollTo', get_template_directory_uri() . '/js/jquery.scrollTo.min.js', array(jquery), '', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(jquery), '', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array(jquery), '', true );
	wp_enqueue_script( 'cells', get_template_directory_uri() . '/js/isotope/cells-by-row.js', array(jquery, scrollTo, localScroll, jquery.counterup, backtotop, scripts), '', true );
	wp_enqueue_script( 'pkgd', get_template_directory_uri() . '/js/isotope/isotope.pkgd.min.js', array(jquery), '', true );
	wp_enqueue_script( 'packery-mode', get_template_directory_uri() . '/js/isotope/packery-mode.pkgd.min.js', array(jquery), '', true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/isotope/scripts.js', array(jquery, scrollTo, localScroll, jquery.counterup, backtotop), '', true );
	wp_enqueue_script( 'scripts-min', get_template_directory_uri() . '/js/isotope/min/scripts-min.js', array(jquery, scrollTo, localScroll, jquery.counterup, backtotop, scripts), '', true );
	wp_enqueue_script( 'googleapis', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBjxvF9oTfcziZWw--3phPVx1ztAsyhXL4', '', true );

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'test_scripts' );
add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
    }
});

add_theme_support( 'post-thumbnails' );