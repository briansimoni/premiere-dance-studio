<?php
add_action( 'wp_enqueue_scripts', 'illdy_child_enqueue_scripts' );
function illdy_child_enqueue_scripts() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'illdy-child-js', get_stylesheet_directory_uri() . '/child-theme.js', array('jquery'), null, true);
}

