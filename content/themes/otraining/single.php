<?php

get_header();
?>
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

<form onsubmit="subscribephp();" method="POST">

  <input class="" type="submit" onsubmit="subscribephp();" value="S'inscrire à la formation">

</form>

<?php the_excerpt(); ?>

<?php get_footer(); ?>