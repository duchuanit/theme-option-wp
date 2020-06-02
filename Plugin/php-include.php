<?php
/*
Plugin Name: PHP File Includer
Plugin URI: http://duchuanblog.com
Description: Include PHP files using a shortcode
Version: 1.0
Author: PI
Author URI: duchuanblog.com
License: Use this how you like!
*/
// include PHP file
function PHP_Include($params = array()) {

	extract(shortcode_atts(array(
	    'file' => 'default'
	), $params));
	
	ob_start();
	include(get_theme_root() . '/' . get_template() . "/$file.php");
	return ob_get_clean();
}
?>