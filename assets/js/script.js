const documentHeight = () => {
  $('.heroImage__container').css('height', window.innerHeight);
  $('#section2').css('min-height', window.innerHeight-$('header').innerHeight());
  $('#section4').css('min-height', window.innerHeight-$('header').innerHeight());
  $('.gmap_canvas').css('min-height', window.innerHeight-$('header').innerHeight()-$('.contactHeader').innerHeight());
  $('#gmap_canvas').css('min-height', window.innerHeight-$('header').innerHeight()-$('.contactHeader').innerHeight());
  $('.contact').css('min-height', $('.gmap_canvas').innerHeight()*0.8);
}

function hideNavbarOnScrollDown() {
  let actuallyScroll = 0;
  $(document).on('scroll', () => {
    if($('#fixedNavbarToggler').attr('aria-expanded')!='true'){
      if(window.innerWidth<991){
        if(actuallyScroll>window.scrollY){
          $('#fixedNavbar').slideDown(500);
        }else{
          $('#fixedNavbar').slideUp(500);
        }
      }

      if(window.scrollY>$('.heroImage__container').innerHeight()-$('header').innerHeight()-1){
        $('header').removeClass('animation-transparent');
        $('header').addClass('animation-color');
      }else{
        if(window.scrollY>$('.heroImage__container').innerHeight()-100){
            $('header').removeClass('animation-color');
            $('header').addClass('animation-transparent');
        }
      }
    }
    actuallyScroll = window.scrollY;
  });
}

const splideSetup = () => {
  if(window.innerWidth<991){
    const splide = new Splide( '.splide', {
      type   : 'loop',
      perPage: 1,
      perMove: 1,
      autoplay: 'true'
    });
    splide.mount();
    $('.gameDiv__a--image').css('height','100px');
  }else{
    const splide = new Splide( '.splide', {
      type   : 'loop',
      perPage: 4,
      perMove: 1,
      focus: 0,
      autoplay: 'true'
    });
    splide.mount();
  }
}

const NavbarBackground = () => {
  $('.navbar-toggler').on('click', () => {
    if($('#navbarNav').hasClass( "collapse" )){
      if($('.navbar-toggler').attr('aria-expanded') == 'false'){
        $('header').css('height', window.innerHeight)
        $('header').css('background-color', '#000000');
        console.log("xd1")
        $('header').removeClass('animation-transparent');
      }else{
        if(window.scrollY>$('.heroImage__container').innerHeight()-$('header').innerHeight()){
            $('header').css('height', '');
            $('header').css('background-color', '#000000');
            console.log("xd2")
        }else{
            $('header').attr('style', '');
            $('header').addClass('animation-transparent');
        }
      }
    }
  })
}

function sleep(milliseconds) {
  const date = Date.now();
  let currentDate = null;
  do {
    currentDate = Date.now();
  } while (currentDate - date < milliseconds);
}

const smoothScroll = () => {
  $('.smoothScroll').on('click', function(e) {
    var id = $(this).attr('href');
    
    var $id = $(id);
    if ($id.length === 0) {
       return;
    }
    
    e.preventDefault();
    
    if(window.innerWidth>991){
     const pos = $id.offset().top-$('header').innerHeight();
     $('body, html').animate({scrollTop: pos});
    }else{
     const pos = $id.offset().top;
     $('.navbar-collapse').removeClass('show');
     $('header').attr('style', '');
     $('.navbar-toggler').attr('aria-expanded', 'false');
     $('body, html').animate({scrollTop: pos}, 500, function(){
      if( window.scrollY!=0){
        $('header').clearQueue();
        $('#fixedNavbar').slideUp(500);
      }
     });
    }
  })
}

$(document).ready(() => {
  documentHeight();
  hideNavbarOnScrollDown();
  splideSetup();
  NavbarBackground();
  smoothScroll();
});