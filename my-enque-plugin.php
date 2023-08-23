<?php
/*
Plugin Name: My Enque Plugin
Description: Enque style and script to the plugin.
Version: 1.0.0
Author: Shiam Chowdhury
*/

// Function to display the "Hello World" message
function my_hello_world_message() {
    echo '<div class="notice notice-success is-dismissible my-custom-class"><p>Hello World from My Hello World Plugin!</p></div>';
}

// Hook the function to the 'admin_notices' action
add_action('admin_notices', 'my_hello_world_message');

// Include the separate PHP file for enqueuing styles and scripts
include_once(plugin_dir_path(__FILE__) . 'enqueue-scripts-styles.php');
