<?php get_header(); ?>
<?php

// if (have_posts()): while (have_posts()): the_post();
    get_template_part('template-parts/home/banner');
// endwhile; endif;


?>
    <main>

      <!-- catégory : Formation les plus populaires -->
      <section class="slider">
        <div class="famous-training">
          <h2 class="famous-training__categories"><i class="fa fa-star" aria-hidden="true"></i>Les dernières formations</h2>
          <div class="wrapper">
          <div class="cards">

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
             
              <div class="content__first"></div>
              <div class="categories__button">
              <a href="<?php bloginfo('url'); ?>/catalogue/">
                  <button class="button">Voir le catalogue</button>
                </a>
              </div>
      </section>
    </main>

    <?php get_footer(); ?>
