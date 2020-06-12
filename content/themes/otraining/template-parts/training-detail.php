<?php get_header();?>


<div class="single_training">
        <img class="single_training_image" src="https://source.unsplash.com/300x225/?wave" alt="wave" />
        <div class="single_training-content">

        <div class="single_training_title">
            <h2>
                <?php the_title(); ?>
                <small>avec <?php the_author_link(); ?></small>
            </h2>
        </div>


<?php if (!is_user_logged_in()){
    the_excerpt();
    echo '<p class="p-connexion">Afin de souscrire veuillez vous connecter:</p>';
    echo '<br><a href="' . home_url() . '/connexion" class="btn-connexion">se connecter</a>';
    
}
    

elseif (is_user_logged_in() && allcontent() ==false){
    the_excerpt(); ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input class="btn button_sub" type="submit" id="envoyer" name="envoyer" value="Souscrire">
    <form>
    <?php if(!empty($_POST['envoyer'])) {
    subscribephp();
    echo '<div class="single_training_content">';
    the_content();
    echo '</div>';
    echo '<script> document.querySelector(".button_sub").style.visibility = "hidden"; </script>';
}

}



else{ ?>
    <div class="single_training_content">
        <?php the_content();?>    
    </div>

<?php }; ?>

    </div>
    </div>
<?php get_footer(); ?>



