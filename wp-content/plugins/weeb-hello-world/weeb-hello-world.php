<?php
/*
Plugin Name: Hello-World
Plugin URI: http://weebtutorials.com/
Description: A hello world plugin used to demonstrate the process of creating plugins.
Version: 1.0
Author: John Richardson
Author URI: http://weebtutorials.com
License: GPL
*/

add_filter('the_content','hello_world');

function hello_world($content){
	if ( is_single() ) { return $content . "<h1> Hello World </h1>";}
	else { return $content;}
}

?>