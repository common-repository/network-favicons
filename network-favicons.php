<?php
/*
Plugin Name: Network Favicons
Plugin URI: http://joshbetz.com/2012/01/network-favicons/
Description: Looks for a favicon in the theme folder to use. Looks, in order, for `favicon.ico`, `favicon.png`, `favicon.gif`
Author: Josh Betz
Version: 0.2
Author URI: http://joshbetz.com/
*/

add_action( 'admin_head', 'network_favicon' );
add_action( 'login_head', 'network_favicon' );
add_action( 'wp_head', 'network_favicon' );

/* Different Favicon for Each Site in MS */
function network_favicon() {
  $template = get_bloginfo('stylesheet_directory');
  $dir = get_stylesheet_directory();
  if( file_exists($dir . '/favicon.ico') ) {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.$template.'/favicon.ico" />';
  } elseif( file_exists($dir . '/favicon.png') ) {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.$template.'/favicon.png" />';
  } elseif( file_exists($dir . '/favicon.gif') ) {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.$template.'/favicon.gif" />';
  }
}

?>