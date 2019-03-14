<?php
/*
	Plugin Name:Staging Redirect
	Description:Redirect visitors that are not logged in to the original website.
	Author:Sandhills Studio
	Author URI:https://www.sandhillsstudio.com/
	Requires at least:5.1
	Tested up to:5.1
	Stable tag:1.0
	Version:1.0
*/
if(!defined('ABSPATH')){die();}
//Redirect
function redirectStaging(){
	$liveSite = str_replace('//staging.','//www.',home_url());
	if(!is_user_logged_in()){
		wp_redirect($liveSite);
		exit;
	}
}
add_action('template_redirect','redirectStaging');
