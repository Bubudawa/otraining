<?php
/*
Template Name: Login
*/
?>

<?php get_header(); ?>



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
            
                wp_login_form(

                    ['redirect' => site_url('wp-admin/')

                    ]
                )
            ?>
<!-- 
                <div class="login-signup">
                    <a href="../signup.php"><p>Se Créer un compte</p></a>
                </div> -->


        </div>
    </div>
</div>