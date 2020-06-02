<?php get_header(); ?>
<?php

$args = [
  'post_type' => 'post', //mettre training
  'posts_per_page' => '1'
];

$wpqueryTrainings = new WP_Query($args);

if ($wpqueryTrainings->have_posts()) : while
($wpqueryTrainings->have_posts()) : $wpqueryTrainings->the_post();
        get_template_part('template-parts/home/banner');

    endwhile;
endif;

?>
    <main>

      <!-- catégory : Formation les plus populaires -->
      <section class="slider">
        <div class="famous-training">
          <h2 class="famous-training__categories"><i class="fa fa-star" aria-hidden="true"></i>Formations les plus populaires</h2>
          <div class="wrapper">

          <?php

$args = [
    'post_type' => 'formation', //mettre training
    'posts_per_page' => '3'
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
      <!-- menu des catégories for mobile-->
      <section class="categories">
      <h2 class="categories__title">Catégories</h2>
      <div class="categories__list">
        <ul>
      <?php

        $args = [
          'post_type' => 'categorie'
        ];

          $wpquerySkills = new WP_Query($args);

          if ($wpquerySkills->have_posts()) : while ($wpquerySkills->have_posts()) : $wpquerySkills->the_post();

              get_template_part('template-parts/home/mobile/categories');

          endwhile;
          endif;

      ?>
        </ul>
      </div>
             
              <!-- menu category for desktop -->
              <div class="categories-dynamique__list">
              <?php

        $args = [
          'post_type' => 'categoriedesk'
        ];

          $wpquerySkills = new WP_Query($args);

          if ($wpquerySkills->have_posts()) : while ($wpquerySkills->have_posts()) : $wpquerySkills->the_post();

              get_template_part('template-parts/home/desktop/categories');

          endwhile;
          endif;

      ?>
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
