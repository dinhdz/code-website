

//Scroll

$(window).scroll(function() {    
  var scroll = $(window).scrollTop();
  if (scroll > 50) {
    $(".header-top").addClass("header-active");
        $(".scroll-top").addClass("active-scroll"); // Scroll Menu - Mobile
    } 
  else {
    $(".header-top").removeClass("header-active");
    $(".scroll-top").removeClass("active-scroll");
  }
});


// scroll To Top

$(".scroll-top").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});


function namdz(){
  $('.icon-menu').click(function(){
    console.log('namdz');
    $(this).toggleClass('active');
    $(this).parents('.header-top').find('.menu-mobile-list').slideToggle();
  });
  $('.plust-minus').click(function(){
    $(this).parents('.menu-mobile-list ul li').toggleClass('active');
    $(this).parents('.menu-mobile-list ul li').find('.sub-mobile').slideToggle();
  });
  $('.none').click(function(){
    $('.form-mobile').slideToggle();
    $(this).hide();
    $(this).next('.block-none').show();
  });
  $('.block-none').click(function(){
    $('.form-mobile').slideToggle();
    $(this).parents('.search-mobile').find('.none').show();
    $(this).hide();
  });
}
namdz();