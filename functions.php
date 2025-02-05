<?php
// Dans functions.php

// Configurer les fonctionnalités du thème
function mota_setup() {
    // Support des menus de navigation
    add_theme_support('menus');

    // Enregistrer un menu de navigation
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mota'),
    ));
}
add_action('after_setup_theme', 'mota_setup');

// Ajout de style CSS
function theme_enqueue_styles() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
