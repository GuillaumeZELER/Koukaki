<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section id="banner" class="banner">
            <!-- vidéo -->
            <video autoplay muted loop id="bg-video" class="rellax">
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/videos/video-studio-koukaki.mp4'; ?>" type="video/mp4">
            </video>
            <!-- banner fallback -->
            <img class="fallback-image" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png' ?>">
            <!-- logo flottant -->
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants" id="logo" class="rellax">
        </section>
        <section id="#story" class="story fade-in-section">
            <h2 class="rotate_af toSlide space_before">L'histoire</h2>
            <article id="" class="story__article rotate_af">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <!-- template de slider pour les chats -->
            <?php get_template_part('template-parts/cat-swiper'); ?>

            <article id="place" class="fade-in-section">
                <!-- nuages -->
                <div class="clouds">
                    <img class="little-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png' ?>" alt="petit nuage">

                    <img class="big-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png' ?>" alt="grand nuage">
                </div>
                <div>
                    <h3 class="toSlide">Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio" class="fade-in-section">
            <h2 class="rotate_af rotate_bf toSlide">Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
    </main><!-- #main -->

<?php
get_footer();
