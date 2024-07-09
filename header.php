<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mota</title>
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
<style>
    
/* Positionnement du logo à gauche avec les dimensions spécifiées */
.logo {
    float: left;
    width: 344px; /* Largeur spécifiée */
    height: 21px; /* Hauteur spécifiée */
}

/* Style pour la barre de navigation principale */
.main-navigation {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 40px 112px 40px 38px;
}

/* Style pour la zone du menu */
.menu-container {
    flex: 1; /* Le menu occupe tout l'espace restant */
}

/* Style pour le menu principal */
.primary-menu {
    list-style-type: none; /* Supprime les puces */
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: flex-end; /* Alignement des éléments à droite */
}

.primary-menu li {
    margin-left: 20px; /* Espacement entre les éléments du menu */
}

.primary-menu li a {
    text-decoration: none; /* Supprime le soulignement des liens */
    color: #000; /* Couleur du texte */
    font-family: Arial, sans-serif; /* Police de caractères */
    font-size: 14px; /* Taille de la police */
}

.primary-menu li a:hover {
    color: #666; /* Couleur du texte au survol */
}

/* Style pour le bouton "Contact" */
.modal-open-btn {
    background-color: transparent; /* Fond transparent */
    border: none; /* Supprime la bordure */
    cursor: pointer;
    text-decoration: none; /* Supprime le soulignement */
    color: #000; /* Couleur du texte */
    font-family: Arial, sans-serif; /* Police de caractères */
    margin-left: 20px;
}

.modal-open-btn:hover {
    color: #666; /* Couleur du texte au survol */
}

</style>