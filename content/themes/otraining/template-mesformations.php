<?php /*
Template Name: Mes formations
*/
?>

<?php get_header(); ?>



<?php 


$see = mytrainings();

foreach($see as $key =>$value){
    $post_id = $value; // L'identifiant du post
    $the_post = get_post($post_id); // On récupère le post
    $the_title = $the_post->post_title; // On récupère le titre du post
    $the_content = $the_post->post_content; // On récupère le contenu du post

    echo 'Le titre est ' . $the_title . 'et le contenu est ' . $the_content . '<br/>'; // On affiche le post
}

get_footer(); ?>











