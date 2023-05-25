<?php
/*
Plugin Name: XerShade's Plugins - Teal Sanctuary
Plugin URI: https://github.com/XerShade/XSPlugins.TealSanctuary
Description: A WordPress plugin that provides website specific code changes for 'tealsanctuary.com'.
Author: XerShade
Author URI: https://www.xershade.ca/
Version: 1.0.0
*/

add_action( 'wp_enqueue_scripts', 'ts_register_stylesheets', 100 );
function ts_register_stylesheets() {
	wp_enqueue_style( 'teal.sanctuary.overrides', plugins_url( 'css/teal.sanctuary.overrides.css', __FILE__ ) );
}
