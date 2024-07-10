<?php
// Template Name: Page d'Accueil
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </main><!-- #main -->
</div><!-- #primary -->



<div class="hero">
<?php
                    // Définir les arguments de la requête pour les articles de type 'photo'
                    $args = array(
                        'post_type' => 'photo', 
                    );
    // Assurez-vous que 'info_photo' est le nom exact de votre groupe de champs
    $info_photo = get_field('photo');
    
    // Vérifiez si le groupe de champs contient des données
    if ($info_photo) {
        // Récupérez le champ photo à partir du groupe
        $photo = $info_photo['photo'];
        
        if ($photo) {
            // Utilisez esc_url pour échapper l'URL de l'image
            echo '<img src="' . esc_url($photo['url']) . '" alt="Une description de l\'image">';
        } else {
            echo '<p>Image non disponible</p>';
        }
    } else {
        echo '<p>Informations sur la photo non disponibles</p>';
    }
    ?>
</div>

<div class="filtre">
        <select name="category">
            <option value="">Sélectionnez une catégorie</option>
            <option value="categorie1">Catégorie 1</option>
            <option value="categorie2">Catégorie 2</option>
            <option value="categorie3">Catégorie 3</option>
        </select>
        <select class=format name="category">
            <option value="">Sélectionnez une catégorie</option>
            <option value="categorie1">Catégorie 1</option>
            <option value="categorie2">Catégorie 2</option>
            <option value="categorie3">Catégorie 3</option>
        </select>
        <input class=date type="date" name="date">
</div>
<div class="photo-grid">
        <div class="photo"></div>
        <div class="photo"></div>
        <div class="photo"></div>
        <div class="photo"></div>
        <div class="photo"></div>
        <div class="photo"></div>
        <div class="photo"></div>
        <div class="photo"></div>
    </div>
<div class="charger-plus">
    <button>Charger plus</button>
</div>
<?php
get_footer();
?>

<style>

.hero{
    width: 100%;
    height: 100vh;
    border:solid;
}
/* style section filtre********************/
.filtre{
    margin: 60px 146px 20px 146px;
}
.filtre select input{
    margin:none;
}
.date{
    margin-left:334px;
}
.format{
    margin-left:33px;
}
/* style section 8 photos ******************/
.photo-grid {
    width: 1148px;
    height: 2040px;
    margin-left: 146px;
    margin-right: 146px;
    display: flex;
    flex-wrap: wrap;
    gap: 20px; /* Optionnel : Espace entre les photos */
    border:solid;
}
.photo {
    width: 561px;
    height: 492px;
    background-color: #ccc; /* Couleur de fond pour visualisation, à remplacer par les images */
    border:solid;
}

.charger-plus {
    display: flex;
    justify-content: center; /* Centre le bouton horizontalement */
    margin: 40px 0; /* Ajoute de la marge au-dessus et en dessous de la div */
}

.charger-plus button {
    width: 272px;
    height: 50px;
    background-color: #D8D8D8;
    border: none;
    font-size: 16px;
    text-align: center;
    line-height: 50px; /* Centre le texte verticalement */
    cursor: pointer; /* Change le curseur à pointer lorsqu'on survole le bouton */
}

</style>