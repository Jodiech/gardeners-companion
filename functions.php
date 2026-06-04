<?php

function gardeners_files(){
    wp_enqueue_script('main-gardeners-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Raleway:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
    wp_enqueue_style('style', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('other-styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'gardeners_files');

function gardeners_features(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'gardeners_features');