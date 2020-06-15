require('jquery');

 var app = {
  init: function() {
    $(document).ready(function(){
      var zindex = 10;
      $("input.single-button").click(function(){
        $("input.button_sub")
            .addClass("hidden");
      }),
      $("div.card").click(function(e){
        e.preventDefault();
    
        var isShowing = false;
    
        if ($(this).hasClass("show")) {
          isShowing = true
        }
    
        if ($("div.cards").hasClass("showing")) {
          // a card is already in view
          $("div.card.show")
            .removeClass("show");
    
          if (isShowing) {
            // this card was showing - reset the grid
            $("div.cards")
              .removeClass("showing");
          } else {
            // this card isn't showing - get in with it
            $(this)
              .css({zIndex: zindex})
              .addClass("show");
    
          }
    
          zindex++;
    
        } else {
          // no cards in view
          $("div.cards")
            .addClass("showing");
          $(this)
            .css({zIndex:zindex})
            .addClass("show");
    
          zindex++;
        }
        
      });
    });


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