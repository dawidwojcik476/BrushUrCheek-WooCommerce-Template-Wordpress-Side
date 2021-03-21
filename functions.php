<?php 

function woocommerce_custom_theme() {
wp_register_style( 'custom_css', get_template_directory_uri() . '/css/style.css', false, '1.0.0' );
wp_register_style( 'open_sans_condensed', 'https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&family=Titillium+Web:wght@300;400;600;700&display=swap', false, '1.0.0' );
wp_register_style( 'roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap', false, '1.0.0' );

wp_enqueue_style( 'custom_css' );
wp_enqueue_style( 'open_sans_condensed' );
wp_enqueue_style( 'roboto' );

wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'woocommerce_custom_theme' );




// Custom menu

function brushurcheek_custom_menu(){
    register_nav_menu('top-menu',__('Brush Ur Cheek Custom Menu', 'brushurcheek'));
}
add_action( 'init', 'brushurcheek_custom_menu');


// Woocommerce

if (class_exists('WooCommerce')) {

    /* WooCommerce Support */
    function woocommerceshop_add_woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    add_action ( 'after_setup_theme', 'woocommerceshop_add_woocommerce_support' );

    // Remove WooCommerce Styles
    // add_filter( 'woocommerce_enqueue_styles', '__return_false' );

    // Remove Shop Title
    add_filter( 'woocommerce_show_page_title', '__return_false' );

    // Add Support
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

}