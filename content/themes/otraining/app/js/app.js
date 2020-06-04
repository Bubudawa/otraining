
 var app = {
  init: function() {



    const openModal = document.querySelector('.fa-bars');
    openModal.addEventListener('click', app.handleOpenMenu);

    const closeModal = document.querySelector('.fa-close');
    closeModal.addEventListener('click', app.handleCloseMenu);

    const closeModalByWrapper = document.querySelector('.wrapper');
    closeModalByWrapper.addEventListener('click', app.handleCloseMenu);

    const filterSelectedFirst = document.querySelector('.categories-dynamique__list-one');
    filterSelectedFirst.addEventListener('click', app.firstFilter);

    const tata = document.querySelector('.categories-dynamique__list-one');
    tata.addEventListener('click', app.tata);
  },

  handleOpenMenu: function(){
    const seeMenuBurger = document.querySelector('.menu-burger');
    seeMenuBurger.classList.add('fs');
    const seeBurgerModal = document.querySelector('.menu-items');
    seeBurgerModal.classList.add('fs');
    const seeBurgerCross = document.querySelector('.menu-bg');
    seeBurgerCross.classList.add('fs');
  },

  handleCloseMenu: function(){
    const seeMenuBurger = document.querySelector('.menu-burger');
    seeMenuBurger.classList.remove('fs');
    const seeBurgerModal = document.querySelector('.menu-items');
    seeBurgerModal.classList.remove('fs');
    const seeBurgerCross = document.querySelector('.menu-bg');
    seeBurgerCross.classList.remove('fs');
  },

  firstFilter: function(){
    const seeFirstFilter = document.querySelector('.categories-dynamique__list-one');
    seeFirstFilter.classList.add('active');
    app.log();
  },
  subscribephp: function(){
    $post_id = url_to_postid(get_permalink());
    $user = get_current_user_id();
    $pdo = new PDO('mysql:host=ec2-3-88-230-190.compute-1.amazonaws.com;dbname=Otraining', 'training', 'training1234');
    $stmt = $pdo->prepare('INSERT INTO wp_subscribers (user_id, formation_id) VALUES ('.$user.', '.$post_id.')');
    $stmt->execute();

return $stmt;

}

};

$(app.init);