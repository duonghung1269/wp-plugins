<?php
/**
* Plugin Name: Chapter 2 - Title FIlter
* Plugin URI: http://localhost/wordpress
* Description: Declares a plugin that will be visible in the WordPress admin interface
* Version: 1.0
* Author: Hung Dang
* Author URI: http://dangduonghung.wordpress.com
**/

add_filter('wp_title', 'ch2tf_title_filter');

function ch2tf_title_filter($title) {
	// select new title based on item type
	if (is_front_page()) {
	 	$new_title = 'Front Page >> ';
	} elseif (get_post_type() == 'page') {
		$new_title = 'Page >> ';
	} elseif (get_post_type() == 'post') {
		$new_title = 'Post >> ';
	}
	
	// Append previous title to title prefix
	if (isset($new_title)) {
		$new_title .= $title;
		
		return $new_title;
	}
	
	return $title;
}

?>