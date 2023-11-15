<?php

/**
 * Include all css and js files
 */
function landwind_load_all_scripts() {
    wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/dist/output.css' );
}
add_action( 'wp_enqueue_scripts', 'landwind_load_all_scripts' );