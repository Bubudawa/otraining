<section class="trainings" id="trainings"> 

<?php

$args = [
  'post_type' => 'formation',
  'posts_per_page' => 15,
  'order' => 'ASC',
  'orderby' => 'title'
];

$wpqueryTraining = new WP_Query($args);


if ($wpqueryTraining->have_posts()): while ($wpqueryTraining->have_posts()): $wpqueryTraining->the_post();

    get_template_part('template-parts/training');

    endwhile; 
endif;

?>

</section>