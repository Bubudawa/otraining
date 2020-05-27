 var app = {
  init: function() {



    const openModal = document.querySelector('.fa-bars');
    openModal.addEventListener('click', app.handleOpenMenu);

    const closeModal = document.querySelector('.fa-close');
    closeModal.addEventListener('click', app.handleCloseMenu);

    const closeModalByWrapper = document.querySelector('.wrapper');
    closeModalByWrapper.addEventListener('click', app.handleCloseMenu);
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
  }
};

$(app.init);
