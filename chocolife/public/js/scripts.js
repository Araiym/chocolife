/*https://chocolife.me
Design and Code Created By Kassymbayev Yertay*/

//Typed text animate
$(document).ready(function(){
  var typed = new Typed(".typed-txt", {
  strings: ["Главное чтобы вы были счастливы!"],
  typeSpeed:80,
  backSpeed:40,
  loop:true
});
});

//Menu-btn animate

$(document).ready(function(){
  var link = $('.menu-link');
  var active = $('.menu');
  var nav_link = $('.menu a');
  link.click(function(){
    link.toggleClass('menu-link-active');
    active.toggleClass('menu_active');
  });
  nav_link.click(function(){
    link.toggleClass('menu-link-active');
    active.toggleClass('menu_active');
  });
});

/*https://chocolife.me
Design and Code Created By Kassymbayev Yertay*/
