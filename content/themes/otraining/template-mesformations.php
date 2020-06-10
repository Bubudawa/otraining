<?php /*
Template Name: Mes formations
*/
?>

<?php get_header(); ?>

<?php the_title()?>

<?php 


$see = mytrainings();

foreach($see as $key =>$value){
    $post_id = $value; // L'identifiant du post
    $the_post = get_post($post_id); // On récupère le post
    $the_thumb = get_the_post_thumbnail($post_id);
    $the_title = $the_post->post_title; // On récupère le titre du post
    $the_content = get_the_excerpt($post_id); // On récupère le contenu du post

   echo '<div class="single_training">
   <img class="single_training_image" src="https://source.unsplash.com/300x225/?wave" alt="wave" />
   <div class="single_training-content">

   <div class="single_training_title">
       <h2>
           '. $the_title .'
           <small>avec <?php the_author_link(); ?></small>
       </h2>
   </div>
   <div class="single_training_content">
   '. $the_content .'
   </div>
   <a href="' .  get_post_permalink($post_id) . '" class="btn">Read more</a>
</div>
</div>' .'<br/>'; // On affiche le post
}




get_footer(); ?>











