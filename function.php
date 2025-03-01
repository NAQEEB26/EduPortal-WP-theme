<?php
function eduportal_wp_theme_setup() {
    add_theme_support('title-tag'); // Page title support
    add_theme_support('post-thumbnails'); // Featured images
}
add_action('after_setup_theme', 'eduportal_wp_theme_setup');
?>