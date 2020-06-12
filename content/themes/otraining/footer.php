<footer>
      <section class="footer__teacher">
        <img src="images/laptop.png" alt="">
        <div class="footer__teacher__button">
          <a href="#">
            <button class="footer__teacher__button__content button">Devenez Formateur</button>
          </a>
        </div>
      </section>

      <section class="footer-wrapper">
      <div class="footer__menu">
          <div class="footer__menu__catégories">
            <ul>

            <?php dynamic_sidebar('aside'); ?>

            </ul>
          </div>
          <div class="footer__menu__menu">
            <ul>
              <li><a href="<?php echo home_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i>Accueil</a></li>
              <li><a href="<?php echo home_url(); ?>/catalogue"><i class="fa fa-suitcase" aria-hidden="true"></i>Formations</a></li>
              <li><a href="<?php echo home_url(); ?>/a-propos"><i class="fa fa-info-circle" aria-hidden="true"></i>A propos</a></li>
              <li><a href="<?php echo home_url(); ?>/contact"><i class="fa fa-envelope-o" aria-hidden="true"></i>Contact</a></li>
              <li><a href="<?php echo home_url(); ?>/besoin-daide"><i class="fa fa-question-circle" aria-hidden="true"></i>Aide</a></li>
            </ul>
          </div>
          <div class="footer__menu__session">
            <ul>
            <li><a href="<?php echo home_url(); ?>/inscription"><i class="fa fa-sign-in" aria-hidden="true"></i>S'inscrire</a></li>
              <li><a href="<?php echo home_url(); ?>/connexion"><i class="fa fa-user-circle" aria-hidden="true"></i>Se connecter</a></li>
              <li><a href="<?php echo home_url(); ?>/devenir-formateur"><i class="fa fa-user-plus" aria-hidden="true"></i>Devenez Formateur</a></li>
            </ul>
          </div>     
      </div>
      <div class="footer__end">
          <div class="footer__end__copy">
            <p>
              Copyright 2020 - O'training
            </p>
          </div>

          <div class="footer__end__menu-ml">
              <a href="<?php echo home_url(); ?>/mentions-legales">Mentions légales</a>
            </div>
            <div class="footer__end__menu-cgv">
              <a href="<?php echo home_url(); ?>/conditions-generales-dutilisation">CGU</a>
          </div>


      </div>

      </section>
    </footer>
  <?php wp_footer(); ?>
</body>
</html>
