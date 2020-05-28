<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>O'training</title>
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <header>
      <div class="navbar">
        <div class="navbar__logo">
          <a href="#">O'training</a>
        </div>
        <div class="navbar__formations">
            <a href="#" class="session__log-in"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i>Formations</a>
        </div>
        <form action="">
          <p>
            <input type="search" id="search" value="Recherchez" placeholer="">
            <i class="fa fa-search" aria-hidden="true"></i>
          </p>
        </form>
        <div class="menu-bg"></div>
        <div class="menu-burger"><i class="fa fa-bars" aria-hidden="true"></i>
          <i class="fa fa-close" aria-hidden="true"></i></div>
        <div class="menu-items">
          <form class="searchform cf">
            <input type="text" placeholder="Recherchez">
            <i class="fa fa-search" aria-hidden="true"></i>
          </form>
          <a href="#">Formations</a>
          <a href="#">A propos</a>
          <a href="#">Contact</a>
          <a href="#">Connexion</a>
          <a href="#">Inscription</a>
          <a href="#">Aide</a>
          <i class="fa fa-facebook" aria-hidden="true"></i>
          <i class="fa fa-twitter" aria-hidden="true"></i>
          <i class="fa fa-instagram" aria-hidden="true"></i>
          <i class="fa fa-linkedin" aria-hidden="true"></i>
          <p>
            Copyright 2020 - O'training
          </p>
          

          <!-- <p class="navbar__burger__copyright">Copyright 2020 <i class="fa fa-copyright" aria-hidden="true"></i>- O'training</p> -->
        </div>
        <div class="session">
          <a href="#" class="session__log-in">Connexion</a>
          <a href="#" class="session__sign-up">Inscription</a>
        </div>
      </div>
      <div class="banner">
        <div class="description">
          <h1 class="banner__title">Progressez à votre rythme :</h1>
          <p class="banner__content">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <div class="banner__button">
            <a href="#">
              <button class="button">Formations gratuites</button>
            </a>
          </div>
        </div>
      </div>
    </header>
    <main>

      <!-- catégory : Formation les plus populaires -->
      <section class="slider">
        <div class="famous-training">
          <h2 class="famous-training__categories"><i class="fa fa-star" aria-hidden="true"></i>Formations les plus populaires</h2>
          <div class="wrapper">
          <!-- 1 exemple formation -->
            <div class="famous-training__single">
            <div class="famous-training__single__image">
              <img src="images/movie.jpg" alt="">
            </div>
            <h1 class="famous-training__single__title">Apprendre PHP comme un Pro !</h1>
            <div class="famous-training__single__pricetime">
              <div class="price">
                <i class="fa fa-money fa-lg" aria-hidden="true"></i>666$
              </div>
              <div class="time">
                <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>6h66
              </div>
            </div>
            <div class="famous-training__single__author">
              <a href="#"><i class="fa fa-user" aria-hidden="true"></i>Julien Adams</a>
            </div>
            </div>

          <!-- 1 exemple formation -->
            <div class="famous-training__single">
            <div class="famous-training__single__image">
              <img src="images/paint.jpg" alt="">
            </div>
            <h1 class="famous-training__single__title">Formation complète sur Photoshop</h1>
            <div class="famous-training__single__pricetime">
                <div class="price">
                    <i class="fa fa-money fa-lg" aria-hidden="true"></i>17,77€
                  </div>
                  <div class="time">
                    <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>3h30
                  </div>
            </div>
            <div class="famous-training__single__author">
              <a href="#"><i class="fa fa-user" aria-hidden="true"></i>Pierre-Marc Pachounou</a>
            </div>
            </div>

          <!-- 1 exemple formation -->
            <div class="famous-training__single">
            <div class="famous-training__single__image">
              <img src="images/map.jpg" alt="">
            </div>
            <h1 class="famous-training__single__title">L'immobilier pas à pas</h1>
            <div class="famous-training__single__pricetime">
                <div class="price">
                    <i class="fa fa-money fa-lg" aria-hidden="true"></i>97€
                  </div>
                  <div class="time">
                    <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>2h30min
                  </div>
            </div>
            <div class="famous-training__single__author">
              <a href="#"><i class="fa fa-user" aria-hidden="true"></i>Pierre-Marc Pachounou</a>
            </div>
            </div>

          <!-- 1 exemple formation -->
            <div class="famous-training__single">
            <div class="famous-training__single__image">
              <img src="images/digital.jpg" alt="">
            </div>
            <h1 class="famous-training__single__title">Formez-vous aux métiers du web</h1>
            <div class="famous-training__single__pricetime">
                <div class="price">
                    <i class="fa fa-money fa-lg" aria-hidden="true"></i>125€
                  </div>
                  <div class="time">
                    <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>4h30
                  </div>
            </div>
            <div class="famous-training__single__author">
              <a href="#"><i class="fa fa-user" aria-hidden="true"></i>Pierre-Marc Pachounou</a>
            </div>
            </div>

          <!-- 1 exemple formation -->
            <div class="famous-training__single">
            <div class="famous-training__single__image">
              <img src="images/architecture.jpg" alt="">
            </div>
            <h1 class="famous-training__single__title">Augementez vos revenus foncier</h1>
            <div class="famous-training__single__pricetime">
                <div class="price">
                    <i class="fa fa-money fa-lg" aria-hidden="true"></i>45€
                  </div>
                  <div class="time">
                    <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>30min
                  </div>
            </div>
            <div class="famous-training__single__author">
              <a href="#"><i class="fa fa-user" aria-hidden="true"></i>Pierre-Marc Pachounou</a>
            </div>
            </div>
          </div>

        </div>
      </section>

      <!-- menu des catégories -->
      <section class="categories">
              <h2 class="categories__title"><i class="fa fa-archive" aria-hidden="true"></i>Catégories</h2>
              <div class="categories__list">
                <ul>
                  <li><a href="#"><i class="fa fa-futbol-o" aria-hidden="true"></i>Sport</a></li>
                  <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i>Marketing</a></li>
                  <li><a href="#"><i class="fa fa-building-o" aria-hidden="true"></i>Immobilier</a></li>
                  <li><a href="#"><i class="fa fa-laptop" aria-hidden="true"></i>Informatique</a></li>
                  <li><a href="#"><i class="fa fa-paint-brush" aria-hidden="true"></i>Art</a></li>
                  <li><a href="#"><i class="fa fa-music" aria-hidden="true"></i>Musique</a></li>
                  <li><a href="#"><i class="fa fa-cube" aria-hidden="true"></i>Design</a></li>
                  <li><a href="#"><i class="fa fa-child" aria-hidden="true"></i>Développment personnel</a></li>
                </ul>
              </div>
              <!-- menu category for desktop -->
              <div class="categories-dynamique__list">
                <a class="categories-dynamique__list-one" href="#"></i>Sport</a>
                <a class="categories-dynamique__list-two" href="#"></i>Marketing</a>
                <a class="categories-dynamique__list-three" href="#"></i>Immobilier</a>
                <a class="categories-dynamique__list-four" href="#"></i>Informatique</a> 
              </div>
              <div class="content__first"></div>
              <div class="categories__button">
                <a href="#">
                  <button class="button">Voir le catalogue</button>
                </a>
              </div>
      </section>
    </main>

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
              <li><a href="#"><i class="fa fa-music" aria-hidden="true"></i>Musique</a></li>
              <li><a href="#"><i class="fa fa-cube" aria-hidden="true"></i>Design</a></li>
              <li><a href="#"><i class="fa fa-child" aria-hidden="true"></i>développement personnel</a></li>
              <li><a href="#"><i class="fa fa-laptop" aria-hidden="true"></i>Informatique</a></li>
              <li><a href="#"><i class="fa fa-paint-brush" aria-hidden="true"></i>Art</a></li>
            </ul>
          </div>
          <div class="footer__menu__menu">
            <ul>
              <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>Accueil</a></li>
              <li><a href="#"><i class="fa fa-suitcase" aria-hidden="true"></i>Formations</a></li>
              <li><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>A propos</a></li>
              <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>Contact</a></li>
              <li><a href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>Aide</a></li>
            </ul>
          </div>
          <div class="footer__menu__session">
            <ul>
              <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>S'inscrire</a></li>
              <li><a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i>Se connecter</a></li>
              <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Devenez Formateur</a></li>
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
              <a href="#">Mentions légales</a>
            </div>
            <div class="footer__end__menu-cgv">
              <a href="#">CGV</a>
          </div>

          <div class="footer__end__social social-media">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
          </div>
      </div>
      </section>
    </footer>

  <script src="js/app.js"></script>
</body>
</html>
