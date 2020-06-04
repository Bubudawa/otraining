<?php
/*
Template Name: Connexion
*/
?>

<?php get_header(); ?>

<div class="login-text">
    <h2>Connexion</h2>
    <p>Si vous n'avez pas encore de compte : <a href="<?php echo home_url(); ?>/inscription">cliquez ici pour vous inscrire</a>.</p>
</div>
<div class="login__container">
    <div class="login__connexion">
        <div class="login__content">

            <?php

                $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

                if (strpos($url, 'login/?user=empty')!==false) {
                    echo "<div class='login_failed'>Entrez un identifiant :</div>";
                }

                if (strpos($url, 'login/?pwd=empty')!==false) {
                    echo "<div class='login_failed'>Entrez un mot de passe :</div>";
                }

                if (strpos($url, 'login/?login=empty')!==false) {
                    echo "<div class='login_failed'><p>Entrez un identifiant et</p><p>un mot de passe :</p></div>";
                }

                if (strpos($url,'login/?login=failed') !== false) {
                    echo "<div class='login_failed'><p>Mot de passe ou identifiant incorrect :</p></div>";
                }

                if (strpos($url,'wp/wp-login.php?action=lostpassword') !== false) {
                    echo "<div class='login_failed'><p>oups</p></div>";
                }
            ?>


<?php



        if (!is_user_logged_in()) {
            wp_login_form(
                ['redirect' => site_url('wp-admin/')

            ]
            );
        }
        else {
            echo '<p>Vous êtes déjà connecté.</p>';
        }
     ?>
    



        </div>
    </div>
</div>


<?php get_footer(); ?>