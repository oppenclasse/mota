<?php
get_header();
?>

<?php
get_header();
?>

<div class="content-area">
    <main class="site-main">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header>
                    
                    <div class="entry-content">
                        <div class="hero">
                            <?php
                            // Récupérer le groupe de champs 'info_photo'
                            $info_photo = get_field('info_photo');
                            
                            // Vérifier si le groupe de champs contient des données
                            if ($info_photo) {
                                // Récupérer le champ 'photo' à partir du groupe
                                $photo = $info_photo['photo'];
                                
                                if ($photo) {
                                    // Utiliser esc_url pour échapper l'URL de l'image
                                    echo '<img src="' . esc_url($photo['url']) . '" alt="' . esc_attr($photo['alt']) . '">';
                                } else {
                                    echo '<p>Image non disponible</p>';
                                }
                            } else {
                                echo '<p>Informations sur la photo non disponibles</p>';
                            }
                            ?>
                        </div>
                        
                        <!-- Ajoutez ici d'autres contenus de votre article -->
                    </div><!-- .entry-content -->
                </article><!-- #post-## -->
                <?php
            endwhile;
        else :
            ?>
            <p>Aucun article trouvé.</p>
            <?php
        endif;
        ?>
    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php
get_footer();
?>


<?php
get_footer();
?>
<STYLe>

    .hero{
        width: 100%;
        height: 100vh;
        border:solid;
    }
</STYLe>