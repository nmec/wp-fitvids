<?php
/*
Plugin Name: FitVids.js for WordPress
Plugin URI: https://github.com/nmec/wp-fitvids
Description: Embedded videos resize responsively and at the correct aspect ratio using FitVids.js by Paravel & Chris Coyier.
Version: 1.0.1
Author: Jonathan Warren
Author URI: http://nmecdesign.com/
License: Public Domain
*/

add_action('wp_enqueue_scripts', 'fitvids');
function fitvids() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('fitvids', WP_PLUGIN_URL . '/wp-fitvids/jquery.fitvids.js', '', '1.0');
} ?>