<div class="famous-training__single">
    <div class="famous-training__single__image">
        <?php the_post_thumbnail(); ?>
    </div>
        <a href="<?php the_permalink();?>"><h2 class="famous-training__single__title"><?php the_title(); ?></h2></a>
    <div class="famous-training__single__author">
        <a href="#"><i class="fa fa-user" aria-hidden="true"></i><?php the_author_link(); ?></a>
    </div>
</div>



<?php the_excerpt(); ?>