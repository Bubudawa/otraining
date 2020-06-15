<?php
/*
Template Name: Connexion
*/
?>

<?php get_header(); ?>

<div class="login-text">
    <h1>Connectez-vous pour accéder aux formations</h1>
    <p>Pas encore de compte ?</p>
    <p>Alors <a href="<?php echo home_url(); ?>/inscription">cliquez ici pour <em>suivre une formation</em></a>.</p>
    <p>Ou <a href="<?php echo home_url(); ?>/devenir-formateur">cliquez ici pour <em>devenir formateur</em></a>.</p>
</div>
<div class="login__container">
    <div class="login__connexion">
        <div class="login__content">

            <?php

                $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

                if (strpos($url, 'connexion/?user=empty')!==false) {
                    echo "<div class='login_failed'>Entrez un identifiant :</div>";
                }

                if (strpos($url, 'connexion/?pwd=empty')!==false) {
                    echo "<div class='login_failed'>Entrez un mot de passe :</div>";
                }

                if (strpos($url, 'connexion/?login=empty')!==false) {
                    echo "<div class='login_failed'><p>Entrez un identifiant et</p><p>un mot de passe :</p></div>";
                }

                if (strpos($url,'connexion/?login=failed') !== false) {
                    echo "<div class='login_failed'><p>Mot de passe ou identifiant incorrect :</p></div>";
                }

                if (strpos($url,'wp/wp-login.php?action=lostpassword') !== false) {
                    echo "<div class='login_failed'><p>oups</p></div>";
                }
            ?>


            <?php

            if (!is_user_logged_in()) {
                wp_login_form(
                ['redirect' => home_url()

                ]
                );
            }


            else {
                echo '<p>Vous êtes déjà connecté.</p>';
                echo '<p class="login_link"><a href="' . home_url() . '/wp/wp-admin">Accédez à votre espace.</a></p>';
            }

            function remove_lostpassword_text ( $text ) {
                if ($text == 'Lost your password?'){$text = '';}
                       return $text;
                }
        add_filter( 'gettext', 'remove_lostpassword_text' );

            ?> 






        </div>
    </div>
</div>


<?php get_footer(); ?>