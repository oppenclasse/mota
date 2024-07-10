<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mota</title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <nav class="main-navigation">
        <div class="logo">
            <img src="<?php echo esc_url(get_field('logo_du_site')); ?>" alt="Logo du site" width="344" height="21">
        </div>
        <div class="menu-container">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'container'      => false, // Supprime le conteneur div par défaut
                'menu_class'     => 'primary-menu', // Ajoute une classe au menu ul
            ));
            ?>
        </div>
        <button id="open-modal-btn" class="modal-open-btn">Contact</button>
    </nav>
</header>