<?php
function probem_scripts() {
    wp_enqueue_style('probem-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
    wp_enqueue_style('probem-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), '5.15.4', 'all');
    wp_enqueue_style('probem-style', get_stylesheet_uri());
    wp_enqueue_script('probem-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'probem_scripts');

function probem_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Menu Principal', 'probem' ),
            'footer' => __( 'Menu do Rodapé', 'probem' ),
        )
    );
}
add_action('init', 'probem_menus');

function probem_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Rodapé', 'probem' ),
        'id'            => 'footer-widget-area',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action('widgets_init', 'probem_widgets_init');

add_theme_support('post-thumbnails');
?>