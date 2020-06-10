<?php get_header(); ?>



<?php

//On veut pouvoir rechercher une ou des formations

global $wp_query;

$search = get_search_query();



$args = [
    'post_type' => 'formation',
    's' => $search
];
// var_dump($search);
$wpquerySearch = new WP_Query($args);

$count = $wpquerySearch->found_posts; ?>

<div class="search-count">
<h2>Résultats de recherche :</h2>

<h3><?php 
    if ($count == 1) {
        echo 'Il y a ' . $count. ' formation contenant : "' . $search . '".';
    }
    elseif ($count > 1) {
        echo 'Il y a ' . $count . ' formations contenant : "' . $search . '".';
    }
    else {
        echo 'Il n\'y aucune formation contenant : "' . $search . '".';
    }
?></h3>

<?php
if ($wpquerySearch->have_posts()) : while
($wpquerySearch->have_posts()) : $wpquerySearch->the_post();

    get_template_part('template-parts/training');

    endwhile;
endif;

?>



<?php get_footer(); ?>