<?php
/**
* Plugin Name: Custom Filter
* Plugin URI: http://localhost/wordpress
* Description: A custom filter to remove profanity
* Version: 1.0
* Author: Hung Dang
* Author URI: http://dangduonghung.wordpress.com
**/

class customfilter {
	function filter_profanity($content) {
		$profanities = array('fuck', 'lon');
		$content = str_ireplace($profanities, '{censored}', $content);
		return $content;
	}
}

$customFilter = new customfilter();
add_filter('comment_text', array($customFilter, 'filter_profanity'));