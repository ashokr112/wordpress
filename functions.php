
<?php
function renevate_theme_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array('primary'=>'Primary Menu'));
}
add_action('after_setup_theme','renevate_theme_setup');

function renevate_enqueue_scripts(){
    wp_enqueue_style('renevate-fonts','https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');
    wp_enqueue_style('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
    wp_enqueue_style('renevate-style', get_stylesheet_uri());
    wp_enqueue_script('aos','https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array(), null, true);
    wp_enqueue_script('renevate-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
    wp_enqueue_script('renevate-aos-init', get_template_directory_uri() . '/assets/js/aos-init.js', array('aos'), null, true);
}
add_action('wp_enqueue_scripts','renevate_enqueue_scripts');
