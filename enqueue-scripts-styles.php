<?php
// enqueue-scripts-styles.php

// Enqueue styles and scripts
function my_enqueue_styles_and_scripts() {
    // Enqueue your style.css file
    wp_enqueue_style('my-hello-world-style', plugins_url('css/style.css', __FILE__));

    // Enqueue your script.js file
    wp_enqueue_script('my-hello-world-script', plugins_url('js/script.js', __FILE__), array('jquery'), '1.0', true);
}

// Hook the enqueue function to the 'admin_enqueue_scripts' action
add_action('admin_enqueue_scripts', 'my_enqueue_styles_and_scripts');
