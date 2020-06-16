<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/favicon.ico">

      <?php wp_head(); ?>

    </head>

    <body>
      <header>
        <div class="navbar">
          <div class="navbar__logo">
            <a href="<?php echo home_url(); ?>">O'training</a>
          </div>

          <div class="menu-desktop">
            <ul id="menu">
              <li>
                <div class="navbar__formations">
                  <span href="#" class="drop menu-title session__log-in"><i class="drop fa fa-chevron-circle-down" aria-hidden="true"></i>Formations</span>
                </div>

                <div class="dropdown_4columns">

                  <div class="col_1 col_categories">

                    <h3>Catégories de Formation</h3>

                    <ul>
                      <?php dynamic_sidebar('main'); ?>
                    </ul>

                  </div>

                  <div class="col_2">
                                  
                    <p>Nouveau sur le site ? Faites un tour sur nos formations gratuites :</p>
                    <a href="<?php echo home_url(); ?>/catalogue"><button class="col_button">Formations gratuites</button></a>
                    <p>Vous souhaitez partager vos connaissances en créant facilement une formation ?</p>
                    <a href="<?php echo home_url(); ?>/devenir-formateur"><button class="col_button">Devenez formateur</button></a>

                  </div>

                  <div class="col_3">
              
                    <p class= "strong">L'inscription à O'training est 100% gratuite !</p>
                    <ul class="inline">
                    <li><a href="<?php echo home_url(); ?>/a-propos"><i class="fa fa-info-circle" aria-hidden="true"></i>À propos</a></li>
                    <li><a href="<?php echo home_url(); ?>/contact"><i class="fa fa-envelope" aria-hidden="true"></i>Contact</a></li>
                    <li><a href="<?php echo home_url(); ?>/besoin-daide"><i class="fa fa-question-circle" aria-hidden="true"></i>Aide</a></li>

                    </ul>

                  </div>

                </div>
              </li>
            </ul>
          </div>

          <div class="search-container">
            <?php get_search_form(); ?>
          </div>

          <div class="menu-bg">

          </div>

          <div class="menu-burger"><i class="fa fa-bars" aria-hidden="true"></i>
            <i class="fa fa-close" aria-hidden="true"></i>
          </div>

          <div class="menu-items">

            <?php get_search_form(); ?>

            <?php 
              wp_nav_menu(
                [
                'theme_location' => 'burger',
                'menu_class'      => false
                ]
              );
            ?>

            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-linkedin" aria-hidden="true"></i>
            <p>Copyright 2020 - O'training</p>

          </div>

          <div class="session">

            <?php if (is_user_logged_in()) : ?>

              <a href="<?php echo home_url(); ?>/wp/wp-admin" class="session__log-in">Mon espace</a>
              <a href="<?php echo home_url(); ?>/mes-formations" class="session__log-in">Mes formations</a>
              <a href="<?php echo wp_logout_url(); ?>" class="session__log-in" >Déconnexion</a>

            <?php endif;?>

            <?php if (!is_user_logged_in()) : ?>

              <a href="<?php echo home_url(); ?>/connexion" class="session__log-in">Connexion</a>
              <a href="<?php echo home_url(); ?>/inscription" class="session__sign-up">Inscription</a>

            <?php endif;?>

          </div>

        </div>
        
