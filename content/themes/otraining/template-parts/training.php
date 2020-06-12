

<div class="card">
  <div class="card__image-holder">
    <img class="card__image" src="https://source.unsplash.com/300x225/?wave" alt="wave" />
  </div>
  <div class="card-title">
      <span class="left"></span>
      <span class="right"></span>
    </a>
    <h2>
    <?php the_title(); ?>
        <small>avec<span> <?php the_author(); ?></span></small>

    </h2>
  </div>
  <div class="card-flap flap1">
    <div class="card-description">
        <?php the_excerpt();?>    </div>
    <div class="card-flap flap2">
      <div class="card-actions">
        <a href="<?php the_permalink();?>" class="btn">Read more</a>
      </div>
    </div>
  </div>
</div>
