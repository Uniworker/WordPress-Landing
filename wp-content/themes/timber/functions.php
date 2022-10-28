<?php
add_action('wp_enqueue_scripts', 'timber_style');
add_action('wp_enqueue_scripts', 'timber_script');
function timber_style() {
  wp_enqueue_style('normalize-style', get_template_directory_uri().'/assets/css/normalize.min.css');
  wp_enqueue_style('animation-style', get_template_directory_uri().'/assets/css/animate.min.css');
  wp_enqueue_style('magnific-style', get_template_directory_uri().'/assets/css/magnific-popup.min.css');
  wp_enqueue_style('main-style', get_stylesheet_uri());
}
function timber_script() {
  wp_deregister_script('jquery');
  wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.1.min.js');
  wp_enqueue_script('jquery');
  wp_enqueue_script('magnific-script', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
  wp_enqueue_script('modernizr-script', get_template_directory_uri().'/assets/js/modernizr-3.11.2.min.js', array('jquery'), null, true);
  wp_enqueue_script('plugins-script', get_template_directory_uri().'/assets/js/plugins.js', array('jquery'), null, true);
  wp_enqueue_script('animation-script', get_template_directory_uri().'/assets/js/animate.js', array('jquery'), null, true);
}