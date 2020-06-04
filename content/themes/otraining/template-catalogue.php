<?php
/*
Template Name: Catalogue
*/
?>
<?php get_header(); ?>
<label for="categories">
    choisissez une catégorie:</label>
<form method="POST">
<select style="width:12%;"name="categories" id="list">
<option aria-placeholder="toutes les categories"> </option>

<?php
$args = [
  'post_type' => 'categorie',
  'posts_per_page' => 15,
  'order' => 'ASC',
  'orderby' => 'title'
];
$wpqueryTraining = new WP_Query($args);
if ($wpqueryTraining->have_posts()): while ($wpqueryTraining->have_posts()): $wpqueryTraining->the_post();
    get_template_part('template-parts/catalogue/categories');
    endwhile;
endif;
?>
</select>
<input type="submit" name="submit" value="Appliquer"/>
</form>
<?php if(isset($_POST['submit']))
{
    $getcat=$_POST['categories'];
    echo $getcat;
}
?>

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
<?php get_footer(); ?>