<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section id="banner" class="banner fade-in-section">
            <video autoplay muted loop>
                <source src="<?php echo get_template_directory_uri() . '/assets/videos/video-studio-koukaki.mp4'; ?>" type="video/mp4">
            </video>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants"> 
        </section>
        <section id="story" class="story fade-in-section">
            <h2 class="slide-in">L'histoire</h2>
<!-- 
            <section id="studio" class="fade-in-section">
            <h2 class="slide-in">Studio Koukaki</h2> -->

            <article id="story" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters" class="fade-in-section">
                <div class="main-character">
                    <h3>Les personnages</h3>
                    <?php
                  $main_character = $characters_query->posts[0];
                    echo '<figure>';
                    echo get_the_post_thumbnail( $main_character->ID, 'full' );
                    echo '<figcaption>'. $main_character->post_title . '</figcaption>'; 
                    echo '</figure>';
                    $characters_query->next_post(); 
                    ?>
                </div>
                <div class="other-characters">

                  <!-- <div class="swiper mySwiper">
                    <div class="swiper-wrapper"> -->
                      <?php
                      while ( $characters_query->have_posts() ) {

                       /*  $characters_query->the_post();
                        echo get_the_post_thumbnail( get_the_ID(), 'full' ); */

                        
                          /* $characters_query->the_post();
                          echo '<div class="swiper-slide">';
                          echo get_the_post_thumbnail( get_the_ID(), 'full' );
                          echo '<figcaption>';
                          the_title();
                          echo'</figcaption>';
                          echo '</div>'; */
                          

                         $characters_query->the_post();
                          echo '<figure>';
                          echo get_the_post_thumbnail( get_the_ID(), 'full' );
                          echo '<figcaption>';
                          the_title();
                          echo'</figcaption>';
                          echo '</figure>';  
                      }
                      ?>

                    </div>
            </article>
            <article id="place" class="fade-in-section">
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio" class="fade-in-section">
            <h2 class="slide-in">Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>

            </section>
    </main><!-- #main -->


<!--Javascript pour le parallax et fade-in des sections déclanché par le scrolling de la page-->
<script src="<?php echo get_stylesheet_directory_uri() . '/node_modules/simple-parallax-js/dist/simpleParallax.min.js'; ?>"></script>

<script>

//Créer effet parallax sur video et sur les chats
/* const img = document.querySelectorAll('figure > img');
//console.log('image : ', img)
new simpleParallax(img, {
	orientation: 'right',
  scale: 1.8
}); */

const video = document.querySelector('video');
console.log('image logo : ', video)
new simpleParallax(video, {
  orientation: 'right'
});



//Effets avec le scroll
document.addEventListener('DOMContentLoaded', function() {
  var fadeSections = document.querySelectorAll('.fade-in-section');
  var slideH2 = document.querySelectorAll('.slide-in'); // Prend tous les <h2 class="slide-in">

  function checkFadeSections() {
    fadeSections.forEach(function(section) {
      var sectionTop = section.getBoundingClientRect().top;
      var windowHeight = window.innerHeight;

      if (sectionTop < windowHeight * 0.8) {
        section.classList.add('show');
      }
    });
  }

  function checkSlideH2() {
    slideH2.forEach(function(slide) {
      var slideTop = slide.getBoundingClientRect().top;

      var windowHeight = window.innerHeight;
 
      if (slideTop < windowHeight * 0.8) {
        slide.classList.add('slide-in');
      } else {
        slide.classList.remove('slide-in');
      }
    });
  }

  // Appeler les fonctions checkFadeSections et checkSlideH2 lorsque la page est chargée
  checkFadeSections();
  //checkSlideH2();

  // Appeler les fonctions checkFadeSections et checkSlideH2 lorsque la page est défilée
  window.addEventListener('scroll', function() {
    checkFadeSections();
    checkSlideH2();
  });
});


 /* Initialize Swipeeeeeeeeeeeeeer*/

 var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });


</script> 
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<?php
get_footer();
