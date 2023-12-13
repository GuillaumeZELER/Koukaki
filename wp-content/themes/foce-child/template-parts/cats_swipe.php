<?php
//Template des chats qui apparaissent avec swipe.js
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <!--Ici insérer l'animation Swiper sur les personnages-->
            <?php

            echo '<div class="swiper mySwiper" id="characters">';
            echo '<div class="swiper-wrapper">';

            while ($characters_query->have_posts()) {

              $characters_query->the_post();
              
              echo '<div class="swiper-slide">';
              echo get_the_post_thumbnail(get_the_ID(), 'full');
              echo '<figcaption>';
              the_title();
              echo'</figcaption>';
              echo '</div>';
            }
            
            echo '</div></div>';            
            ?>