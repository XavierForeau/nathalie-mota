<?php

// Appel du menu 
function register_my_menu() {
    register_nav_menu('menu', __('Menu principal', 'text-domain'));
    register_nav_menu('footer', __('Footer', 'text-domain'));
}
add_action('after_setup_theme', 'register_my_menu');

// Appel des styles, du JS et des fonts Google
function theme_enqueue_styles() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));

    // Charger le fichier script personnalisé (script.js)
    wp_enqueue_script('theme-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), filemtime(get_stylesheet_directory() . '/assets/js/script.js'), true);

    //Charger le lien google-font Space Mono 
    wp_enqueue_style ('font-space-mono-style', 'https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap', false);
    wp_enqueue_style ('font-poppins-style', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap', false);
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function nathalie_mota_widgets(){
    register_sidebar(
        array(
            'name' => "footer",
            'id' => 'footer-widget',
            'description' => "Widget pour le pied de page",
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );
 }
 add_action('widgets_init', 'nathalie_mota_widgets'); 

