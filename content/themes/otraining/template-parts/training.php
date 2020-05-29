<div class="famous-training__single">

    <div class="famous-training__single__image">
        <img src="images/movie.jpg" alt="">
    </div>

    <h2 class="famous-training__single__title"><?php the_title(); ?></h2>

    <div class="famous-training__single__pricetime">

        <div class="price">
            <i class="fa fa-money fa-lg" aria-hidden="true"></i><?php the_field('prix'); ?>
        </div>

        <div class="time">
            <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i><?php the_field('duree'); ?>
        </div>

    </div>

    <div class="famous-training__single__author">
        <a href="#"><i class="fa fa-user" aria-hidden="true"></i>J<?php the_author_link(); ?></a>
    </div>

</div>