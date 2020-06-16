<?php
/*
Template Name: Devenir Formateur
*/
?>

<?php get_header(); ?>


<div class="login-text">
    <h1>Devenez Formateur</h1>
    <p><em>Pour proposer vos formations</em>, vous êtes au bon endroit !</p>
    <p><em>Créer votre compte</em> ne prend que quelques instants.</p> 
</div>

<div class="login__container">
    <div class="login__connexion">
        <div class="login__content">

        <?php

if (!is_user_logged_in()){
    register_teacher_form();
}
else {
    $logout = wp_logout_url(get_permalink());

    echo '<p>Vous êtes déjà connecté.</p>';
    echo '<p>Vous devez vous déconnecter pour créer un compte Formateur.</p>';
    echo '<p class="login_link"><a href="' . $logout . '">Cliquez ici pour vous déconnecter.</a></p>';
}

?>

        </div>
    </div>
</div>


<div class="login-text">
    <p>Vous souhaitez simplement <em>accéder à une formation et suivre des cours ?</em></p>
    <p><a href="<?php echo home_url(); ?>/inscription">Cliquez ici pour créer votre <em>compte élève</em></a>.
    </p>
</div>



<?php get_footer(); ?>
