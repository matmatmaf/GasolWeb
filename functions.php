<?php
// Includes
require get_template_directory() . '/includes/queries.php';

function gasolweb_setup()
{
    // Habilitar imagenes destacadas
    add_theme_support('post-thumbnails');
    add_theme_support( 'post-formats', array( 'gallery' ) );

    // Titulos SEO
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'gasolweb_setup');

function gasolweb_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menu principal', 'gasolplatense.com.ar')
    ));
    register_nav_menus(array(
        'menu-secundario' => __('Menu secundario', 'gasolplatense.com.ar')
    ));
}

add_action('init', 'gasolweb_menus');

function gasolweb_scripts_styles()
{
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'gasolweb_scripts_styles');

function gasolweb_widgets() {
    register_sidebar( array(
        'name' => 'Footer izquierda', 
        'id' => 'footer_right',
        'before_widget' => '<div class="footer_right">',
        'after_widget' => '</div>',
        'before_title' => '<span class="footer_right_title">',
        'after_title' => '</span>'
    ));
    register_sidebar( array(
        'name' => 'Footer derecha', 
        'id' => 'footer_left',
        'before_widget' => '<div class="footer_left">',
        'after_widget' => '</div>',
        'before_title' => '<span class="footer_left_title">',
        'after_title' => '</span>'
    ));
}
add_action('widgets_init', 'gasolweb_widgets' );
