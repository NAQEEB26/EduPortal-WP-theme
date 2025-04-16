<?php
/**
 * Functions and definitions for the EduPortal theme.
 *
 * @package EduPortal
 */

// ===========================
// Theme Setup
// ===========================
function eduportal_theme_setup() {
    // Add support for dynamic title tags
    add_theme_support('title-tag');

    // Add support for post thumbnails
    add_theme_support('post-thumbnails');
    
    // Add support for custom logo
   add_theme_support('custom-logo');

   add_theme_support('');
    // Register navigation menus
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'eduportal'),
        'footer'    => __('Footer Menu', 'eduportal'),
    ));

    function gifton_customize_footer($wp_customize) {
    // Footer Section
    $wp_customize->add_section('gifton_footer_section', array(
        'title' => __('Footer Customization', 'gifton-theme'),
        'priority' => 120,
    ));

    // Footer Text Setting
    $wp_customize->add_setting('footer_text_setting', array(
        'default' => __('Copyright © 2024', 'gifton-theme'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Saving Footer Text using Control
    $wp_customize->add_control('footer_text_control', array(
        'label' => __('Footer Text', 'gifton-theme'),
        'section' => 'gifton_footer_section',
        'settings' => 'footer_text_setting',
        'type' => 'text',
    ));
}
}
add_action('after_setup_theme', 'eduportal_theme_setup');

//footer customize code

// function eduportal_customize_footer($wp_customize) {
//     // Footer Section
//     $wp_customize->add_section('eduportal_footer_section', array(
//         'title'    => __('Footer Customization', 'eduportal'),
//         'priority' => 120,
//     ));

//     // Footer Text Setting
//     $wp_customize->add_setting('eduportal_footer_text_setting', array(
//         'default'           => __('Copyright © 2024', 'eduportal'),
//         'sanitize_callback' => 'sanitize_text_field',
//     ));

//     // Saving Footer Text using Control
//     $wp_customize->add_control('eduportal_footer_text_control', array(
//         'label'    => __('Footer Text', 'eduportal'),
//         'section'  => 'eduportal_footer_section',
//         'settings' => 'eduportal_footer_text_setting',
//         'type'     => 'text',
//     ));
// }
// add_action('customize_register', 'eduportal_customize_footer');
// ===========================
// Enqueue Styles and Scripts
// ===========================
function eduportal_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('eduportal-style', get_stylesheet_uri());
    wp_enqueue_style('eduportal-main', get_template_directory_uri() . '/assets/css/main.css');

    // Enqueue main JavaScript file
    wp_enqueue_script('eduportal-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'eduportal_scripts');

// ===========================
// Custom Post Types
// ===========================
// function eduportal_stats_post_type() {
//     register_post_type('stats', array(
//         'labels'      => array(
//             'name'          => __('Statistics', 'eduportal'),
//             'singular_name' => __('Statistic', 'eduportal'),
//         ),
//         'public'      => true,
//         'has_archive' => true,
//         'supports'    => array('title', 'editor', 'thumbnail'),
//     ));
// }
// add_action('init', 'eduportal_stats_post_type');

// ===========================
// Customizer Settings
// ===========================
require get_template_directory() . '/inc/customizer.php';