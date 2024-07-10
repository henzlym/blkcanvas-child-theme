<?php
function enqueue_child_styles()
{
	wp_enqueue_style('site-child', get_stylesheet_directory_uri() . '/style.css', array('site-main'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'enqueue_child_styles');
