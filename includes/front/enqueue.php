<?php

function skh_enqueue(){

    wp_register_style( 'bootstrap-styles', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_register_style( 'custom-google-fonts', '//fonts.googleapis.com/css?family=Lato:700');
    wp_register_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_register_style( 'stroke_know_how_main_styles', get_stylesheet_uri(), NULL, microtime());
    //wp_register_style('stroke_know_how_main_styles', get_stylesheet_uri());

    wp_enqueue_style('bootstrap-styles');
	wp_enqueue_style('custom-google-fonts');
	wp_enqueue_style('font-awesome');
    wp_enqueue_style('stroke_know_how_main_styles');   
    

    wp_register_script('popper-script', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), null, true);
    wp_register_script('bootstrap-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), null, true);
    wp_register_script('main-js', get_theme_file_uri('/js/scripts-bundled.js'), array('jquery'), microtime(), true);
    //wp_register_script('main-js', get_theme_file_uri('/js/main.js'), array('jquery'), '1.0', true);
    
    wp_enqueue_script('popper-script');
    wp_enqueue_script('bootstrap-script');
	wp_enqueue_script('main-js');

    wp_localize_script('main-js', 'strokeknowhowData', array(
		'stylesheet_directory_uri' => get_stylesheet_directory_uri(),
	    'root_url' => get_site_url(),
	    'nonce' => wp_create_nonce('wp_rest')
      ));
      

}