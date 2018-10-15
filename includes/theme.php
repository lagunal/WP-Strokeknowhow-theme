<?php


// theme features
function stroke_features(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 300, 300, true );
	add_image_size('portrait', 416, 416, true);
	add_image_size('pageBanner', 1500, 350, true);
}

