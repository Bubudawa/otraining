<?php /*
Template Name: Mes formations
*/
?>

<?php get_header(); ?>



<?php 


$see = mytrainings();


var_dump(mytrainings());


$post_id = $see; // L'identifiant du post
$the_post = get_post($post_id); // On récupère le post
$the_title = $the_post->post_title; // On récupère le contenu du post
echo $the_title; // On affiche le post








 get_footer(); ?>











