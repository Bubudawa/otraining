<?php get_header(); ?>


<?php

    $term = get_queried_object()->name;

?>

<h1>Les Formations en <?php echo $term ?></h1>

<div class="cards">

<?php


// var_dump($term);

    $args = array(
        'post_type' => 'formation',
        'tax_query' => array(
            array(
                'taxonomy' => 'archcate',
                'field' => 'slug',
                'terms' => $term
        )
    )
);

    $wpqueryArchive = new WP_Query($args);

    if ($wpqueryArchive->have_posts()) : while
    ($wpqueryArchive->have_posts()) : $wpqueryArchive->the_post();
    
        get_template_part('template-parts/training');

        endwhile;
    endif;

    ?>
</div>
<?php get_footer(); ?>