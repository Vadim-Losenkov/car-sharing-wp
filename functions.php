<?php

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com');
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap');
	
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css?v403');
	wp_enqueue_style( 'style-media', get_template_directory_uri() . '/assets/css/media.css?v483');
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="js/slick.min.js"></script>

    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>
  wp_enqueue_script( 'main', get_template_directory_uri() .'/assets/js/main.js', array('jquery'), 'null', true );
  wp_enqueue_script( 'main', get_template_directory_uri() .'/assets/js/main.js', array('jquery'), 'null', true );
  wp_enqueue_script( 'main', get_template_directory_uri() .'/assets/js/main.js', array('jquery'), 'null', true );
  wp_enqueue_script( 'main', get_template_directory_uri() .'/assets/js/main.js', array('jquery'), 'null', true );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>