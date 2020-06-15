
<div class="test">
  <div class="card">
    <div class="card__image-holder">
      <?php the_post_thumbnail() ?>
    </div>
    <div class="card-title"> 
        <span class="left"></span>
        <span class="right"></span>
      </a>
      <h2>
      <?php the_title(); ?>
          <small>avec<span> <?php the_author(); ?><span></small>

      </h2> 
      <p><?php the_field('prix'); ?> €</p>
      <p><?php the_field('duree'); ?> heures</p>

    </div>
    <div class="card-flap flap1">
      <div class="card-description">
          <?php the_excerpt();?>    </div>
     <div class="card-flap flap2">

      </div>
    </div>
  </div>
  <div class="card-actions">
      <a href="<?php the_permalink();?>" class="btn" alt="<?php echo the_title() ?>">Détail de la formation</a>
  </div>
</div>
