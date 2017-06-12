<?php
/*
    ===================
    Include scripts
    ===================
*/
function starter_script_enqueue() {
    //css
    wp_enqueue_style('bootstrap', get_template_directory_uri() . 'css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . 'css/starter.css', array(), '1.0.0', 'all');
    //js
    wp_enqueue_scripts ('jquery');
    wp_enqueue_script ('bootstrapjs', get_template_directory_uri() . 'js/bootstrap.min.js', array(), '1.0.0', true);
    wp_enqueue_script ('customjs', get_template_directory_uri() . 'js/starter.js', array(), '1.0.0', true);

}

add_action ('wp_enqueue_scripts', 'starter_script_enqueue');

function starter_theme_setup() {
    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Foter Navigation');
}

add_action('init', 'starter_theme_setup');


/*
    ===================
    Activate menus
    ===================
*/

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside', 'image', 'video'));
