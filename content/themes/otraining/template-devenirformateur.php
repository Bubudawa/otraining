<?php
/*
Template Name: Devenir Formateur
*/
?>

<?php get_header(); ?>


<div class="login-text">
    <h2>Devenir Formateur</h2>
    <p>Si vous avez déjà un compte : <a href="<?php echo home_url(); ?>/connexion">cliquez ici pour vous connecter</a>.</p>
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
    echo '<p><a href="' . $logout . '">cliquez ici pour vous déconnecter.</a></p>';
}

?>

        </div>
    </div>
</div>


<div class="login-text">
    <p>Si vous souhaitez plutôt suivre une formation ? 
        <a href="<?php echo home_url(); ?>/inscription">cliquez ici pour vous incrire</a>.
    </p>
</div>



<?php get_footer(); ?>