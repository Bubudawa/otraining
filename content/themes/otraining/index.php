<?php get_header(); ?>

    <main>

      <!-- catégory : Formation les plus populaires -->
      <section class="slider">
        <div class="famous-training">
          <h2 class="famous-training__categories"><i class="fa fa-star" aria-hidden="true"></i>Formations les plus populaires</h2>
          <div class="wrapper">

          <?php

$args = [
    'post_type' => 'formation' //mettre training
];

$wpqueryTrainings = new WP_Query($args);

if ($wpqueryTrainings->have_posts()) : while
($wpqueryTrainings->have_posts()) : $wpqueryTrainings->the_post();

    get_template_part('template-parts/training');

    endwhile;
endif;

?>

          </div>
        </div>
      </section>
      <!-- menu des catégories -->
      <section class="categories">
              <h2 class="categories__title"><i class="fa fa-archive" aria-hidden="true"></i>Catégories</h2>
              <div class="categories__list">
                <ul>
                  <li><a href="#"><i class="fa fa-futbol-o" aria-hidden="true"></i>Sport</a></li>
                  <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i>Marketing</a></li>
                  <li><a href="#"><i class="fa fa-building-o" aria-hidden="true"></i>Immobilier</a></li>
                  <li><a href="#"><i class="fa fa-laptop" aria-hidden="true"></i>Informatique</a></li>
                  <li><a href="#"><i class="fa fa-paint-brush" aria-hidden="true"></i>Art</a></li>
                  <li><a href="#"><i class="fa fa-music" aria-hidden="true"></i>Musique</a></li>
                  <li><a href="#"><i class="fa fa-cube" aria-hidden="true"></i>Design</a></li>
                  <li><a href="#"><i class="fa fa-child" aria-hidden="true"></i>Développment personnel</a></li>
                </ul>
              </div>
              <!-- menu category for desktop -->
              <div class="categories-dynamique__list">
                <a class="categories-dynamique__list-one" href="#"></i>Sport</a>
                <a class="categories-dynamique__list-two" href="#"></i>Marketing</a>
                <a class="categories-dynamique__list-three" href="#"></i>Immobilier</a>
                <a class="categories-dynamique__list-four" href="#"></i>Informatique</a> 
              </div>
              <div class="content__first"></div>
              <div class="categories__button">
                <a href="#">
                  <button class="button">Voir le catalogue</button>
                </a>
              </div>
      </section>
    </main>

    <?php get_footer(); ?>
