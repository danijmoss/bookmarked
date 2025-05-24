<?php 

// General Settings
function settings() {
    add_theme_support('title-tag'); // Show page title in site tab
    add_theme_support('post-thumbnails'); // Allow features images
    add_theme_support('custom-logo'); // Add in a custom logo
}

add_action('after_setup_theme', 'settings');


// CSS and JS
function mytheme_enqueue_assets() {
    // Load CSS
    wp_enqueue_style('mytheme-style', get_stylesheet_uri()); // This loads style.css in your theme's root

    // Load JS
    wp_enqueue_script('mytheme-main', get_template_directory_uri() . '/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');


// Custom logo Class
function mytheme_add_logo_class( $html ) {
    $html = str_replace('class="custom-logo"', 'class="custom-logo logo"', $html);
    return $html;
}
add_filter( 'get_custom_logo', 'mytheme_add_logo_class' );


// Dynamic Navigation
function mytheme_register_menus() {
    register_nav_menu('primary', __('Primary Menu', 'mytheme'));
}
add_action('after_setup_theme', 'mytheme_register_menus');

// Dynamic 3-column Footer
function mytheme_register_footer_widgets() {
    register_sidebar(array(
        'name'          => 'Footer Column 1',
        'id'            => 'footer-col-1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => 'Footer Column 2',
        'id'            => 'footer-col-2',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => 'Footer Column 3',
        'id'            => 'footer-col-3',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'mytheme_register_footer_widgets');

// Custom Image Size for Single Book Review Page
add_image_size('custom-thumb', 450, 700, true); // 450x700 hard crop




