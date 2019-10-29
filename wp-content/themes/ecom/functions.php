<?php
//display title and tag in header

add_theme_support("title-tag");

//wp_enqueue scripts

function ecmom_scripts(){
	//for syle
	wp_enqueue_style('bootstrap_css',get_theme_file_uri('/assets/css/bootstrap.min.css'),array(),'v3.2.0');
	wp_enqueue_style('main_css',get_theme_file_uri('/assets/css/main.css'),array(),'v3.2.0');
	wp_enqueue_style('blue',get_theme_file_uri('/assets/css/blue.css'),array(),'v3.2.0');
	wp_enqueue_style('owl.carousel',get_theme_file_uri('/assets/css/owl.carousel.css'),array(),'v3.2.0');
	wp_enqueue_style('animate',get_theme_file_uri('/assets/css/animate.min.css'),array(),'v3.2.0');
	wp_enqueue_style('rateit',get_theme_file_uri('/assets/css/rateit.css'),array(),'v3.2.0');
	wp_enqueue_style('bootstrap_select',get_theme_file_uri('/assets/css/bootstrap-select.min.css'),array(),'v3.2.0');
	wp_enqueue_style('font_awesome',get_theme_file_uri('/assets/css/font-awesome.css'),array(),'v3.2.0');
	wp_enqueue_style('woocommece',get_theme_file_uri('/assets/css/woocommece.css'),array(),'v3.2.0');
  wp_enqueue_style('stylesheet',get_stylesheet_uri());
  
	//for scripts
	wp_enqueue_script('main_js',get_theme_file_uri('/assets/js/jquery-1.11.1.min.js'),array(),' v1.11.1',true);
	wp_enqueue_script('bootstrap',get_theme_file_uri('/assets/js/bootstrap.min.js'),array(),' v1.11.1',true);
	wp_enqueue_script('dropdown',get_theme_file_uri('/assets/js//bootstrap-hover-dropdown.min.js'),array(),' v1.11.1',true);
	wp_enqueue_script('carousel',get_theme_file_uri('/assets/js/owl.carousel.min.js'),array(),' v1.11.1',true);
	wp_enqueue_script('echo',get_theme_file_uri('/assets/js/echo.min.js'),array(),' v1.11.1',true);
	wp_enqueue_script('easing',get_theme_file_uri('/assets/js/jquery.easing-1.3.min.js'),array(),' v1.11.1',true);
	wp_enqueue_script('slider',get_theme_file_uri('/assets/js/bootstrap-slider.min.js'),array(),' v1.11.1',true);
	wp_enqueue_script('rateit',get_theme_file_uri('/assets/js/jquery.rateit.min.js'),array(),' v1.11.1',true);
	wp_enqueue_script('lightbox',get_theme_file_uri('/assets/js/lightbox.min.js'),array(),' v1.11.1',true);
	wp_enqueue_script('select',get_theme_file_uri('/assets/js/bootstrap-select.min.js'),array(),' v1.11.1',true);
	wp_enqueue_script('wow',get_theme_file_uri('/assets/js/wow.min.js'),array(),' v1.11.1',true);
	wp_enqueue_script('scripts',get_theme_file_uri('/assets/js/scripts.js'),array(),' v1.11.1',true);

}
add_action('wp_enqueue_scripts','ecmom_scripts');


/** Register Menu Support */

function ecomMenu() {
  if(function_exists('register_nav_menu')) {
    register_nav_menu('main_menu', __('Main Menu','ecom'));
    register_nav_menu('top_menu', __('Top Menu','ecom'));
  }
}

add_action('init','ecomMenu');

/**
 * Image Support ($featured, array cac trang cho xuat hien Featured Thumbnails)
 */

add_theme_support('post-thumbnails',['post','page']);
set_post_thumbnail_size(300, 200, true);
add_image_size('myFeatureImage', 1360, 768, true);

/**
 * Widget Support
 */

 function ecom_widget() {
   register_sidebar([
    'name'          => esc_html__('Footer Widget One', 'ecom'),
    'description'   => esc_html__('This is description area for footer widget', 'ecom'),
    'id'            => 'footer_widget_one',
    'before_widget' => '<div class="col-xs-12 col-sm-6 col-md-3">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="module-heading"><h4 class="module-title">',
    'after_title'  => '</h4></div>',
   ]);
   register_sidebar([
    'name'          => esc_html__('Footer Widget Two', 'ecom'),
    'description'   => esc_html__('This is description area for footer widget', 'ecom'),
    'id'            => 'footer_widget_two',
    'before_widget' => '<div class="col-xs-12 col-sm-6 col-md-3">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="module-heading"><h4 class="module-title">',
    'after_title'  => '</h4></div>',
   ]);
   register_sidebar([
    'name'          => esc_html__('Footer Widget Three', 'ecom'),
    'description'   => esc_html__('This is description area for footer widget', 'ecom'),
    'id'            => 'footer_widget_three',
    'before_widget' => '<div class="col-xs-12 col-sm-6 col-md-3">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="module-heading"><h4 class="module-title">',
    'after_title'  => '</h4></div>',
   ]);
   register_sidebar([
    'name'          => esc_html__('Footer Widget First', 'ecom'),
    'description'   => esc_html__('This is description area for footer widget', 'ecom'),
    'id'            => 'footer_widget_first',
    'before_widget' => '<div class="col-xs-12 col-sm-6 col-md-3">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="module-heading"><h4 class="module-title">',
    'after_title'  => '</h4></div>',
   ]);
 }

 add_action('widgets_init','ecom_widget');

 /** Woocommerce theme support */
 function ecom_woocommerce_support() {
  add_theme_support('woocommerce');
 }

add_action('after_setup_theme', 'ecom_woocommerce_support');