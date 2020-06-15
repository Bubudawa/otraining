<?php
/*
Template Name: Catalogue
*/
?>
<?php get_header(); ?>

<h1>Catalogue des Formations</h1>

<label class="selector__categorie"for="categories">Choisissez une catégorie:</label>
<form method="POST">
<select class="selector__selector" style="width:16rem;"name="categories" id="list">
<!-- Toutes doit retourner une valeur vide pour afficher toutes les formations -->
<option value="">- Toutes -</option> 

<?php
$args = [
  'post_type' => 'categorie',
  'posts_per_page' => 15,
  'order' => 'ASC',
  'orderby' => 'title'
];

$getcat= '';

if(isset($_POST['submit']))
{
    $getcat=$_POST['categories'];
}

//Boucle pour afficher les catégories dans un drop-down
$wpqueryCat = new WP_Query($args);
if ($wpqueryCat->have_posts()): while ($wpqueryCat->have_posts()): $wpqueryCat->the_post();


  $title = get_the_title();

//permet d'ajouter 'selected' à la catégorie dropdown sélectionner après le submit.
  if($getcat == $title) {
      $selected = 'selected';
  }
  else {
      $selected = '';
  }
  ?>

  <option <?php echo $selected ?>><?php the_title(); ?></option>

  <?php
  endwhile;
endif;

?>

</select>
<input class="selector__button" type="submit" name="submit" value="Appliquer"/>
</form>

<div class="cards">

<?php

$args = [
  'post_type' => 'formation',
  'order' => 'ASC',
  'orderby' => 'title',
  'meta_key' => 'categorie',
  'meta_value' => $getcat
];

$wpqueryTraining = new WP_Query($args);
if ($wpqueryTraining->have_posts()): while ($wpqueryTraining->have_posts()): $wpqueryTraining->the_post();

    get_template_part('template-parts/training');
  endwhile;
endif;
?>

</div>

<?php get_footer(); ?>