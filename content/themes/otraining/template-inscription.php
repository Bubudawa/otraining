<?php
/*
Template Name: Inscription
*/
?>

<?php get_header(); ?>

<div class="login-text">
    <h1>Accédez gratuitement aux formations</h1>
    <p><em>Créer votre compte</em> ne prend que quelques instants.</p>
    <p>Vous pourrez alors choisir de <em>suivre les cours</em> que vous souhaitez.</p>
</div>

<div class="login__container">
    <div class="login__connexion">
        <div class="login__content">


<?php

    if (!is_user_logged_in()){
        register_student_form();
    }
    else {
        $logout = wp_logout_url(get_permalink());

        echo '<p>Vous êtes déjà connecté.</p>';

        echo '<p>Vous devez vous déconnecter pour créer un compte Elève.</p>';

        echo '<p class="login_link"><a href="' . $logout . '">Cliquez ici pour vous déconnecter.</a></p>';
    }
 ?>

        </div>
    </div>
</div>

<div class="login-text">
    <p>Vous souhaitez <em>devenir formateur</em> et <em>proposer vos formations</em> :</p> 
    <p><a href="<?php echo home_url(); ?>/devenir-formateur">Cliquez ici pour devenir formateur</a>.</p>
</div>


<?php get_footer(); ?>
