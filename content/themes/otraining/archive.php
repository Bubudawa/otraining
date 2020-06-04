<?php get_header(); ?>


<?php


if (have_posts()) : while (have_posts()) : the_post();

    get_template_part('detail');

endwhile; endif;


?>

<?php //start by fetching the terms for the animal_cat taxonomy
$terms = get_terms( 'category', array(
    // 'orderby'    => 'count',
    // 'hide_empty' => 0
) );
?>

<?php
// now run a query for each animal family
foreach( $terms as $term ) {
 
    // Define the query
    $args = array(
        'post_type' => 'formation',
        'category' => $term->slug
    );
    $query = new WP_Query( $args );
     
} ?>

<?php
// Start the Loop
while ( $query->have_posts() ) : $query->the_post(); ?>
 
 <div class="famous-training__single">

<div class="famous-training__single__image">
<?php the_post_thumbnail(); ?>
</div>

<a href="<?php the_permalink();?>"><h2 class="famous-training__single__title"><?php the_title(); ?></h2></a>

<div class="famous-training__single__pricetime">

    <div class="price">
        <i class="fa fa-money fa-lg" aria-hidden="true"></i><?php the_field('prix'); ?>
    </div>

    <div class="time">
        <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i><?php the_field('duree'); ?>
    </div>

</div>

<div class="famous-training__single__author">
    <a href="#"><i class="fa fa-user" aria-hidden="true"></i><?php the_author_link(); ?></a>
</div>

</div>

<?php endwhile;

// use reset postdata to restore orginal query
wp_reset_postdata();
?>

<?php get_footer(); ?>