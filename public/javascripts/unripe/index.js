$(function () {
  if (typeof window.unripe === 'undefined') {
    window.unripe = {};
  }

  if (typeof window.unripe.index === 'undefined') {
    window.unripe.index = {};
  }

  window.unripe.index.keyvisual = {};

  var k = window.unripe.index.keyvisual;

  k.tomori = function (index) {
    $('.home .header .tweet.tomori').hide();
    $('.home .header .tweet.tomori').eq(index).fadeIn(2000);
  };

  k.koike = function (index) {
    $('.home .header .tweet.koike').hide();
    $('.home .header .tweet.koike').eq(index).fadeIn(2000);
  };

  k.yoshino = function (index) {
    $('.home .header .tweet.yoshino').hide();
    $('.home .header .tweet.yoshino').eq(index).fadeIn(2000);
  };

  k.enomoto = function (index) {
    $('.home .header .tweet.enomoto').hide();
    $('.home .header .tweet.enomoto').eq(index).fadeIn(2000);
  };

  k.sakuma = function (index) {
    $('.home .header .tweet.sakuma').hide();
    $('.home .header .tweet.sakuma').eq(index).fadeIn(2000);
  };

  k.shimizu = function (index) {
    $('.home .header .tweet.shimizu').hide();
    $('.home .header .tweet.shimizu').eq(index).fadeIn(2000);
  };

  k.start = function (index) {
    setTimeout(function () { k.tomori(index); }, 10);
    setTimeout(function () { k.yoshino(index); }, 510);
    setTimeout(function () { k.koike(index); }, 1010);
    setTimeout(function () { k.enomoto(index); }, 1510);
    setTimeout(function () { k.sakuma(index); }, 2010);
    setTimeout(function () { k.shimizu(index); }, 2510);
  };


  k.timer = function () {
    setTimeout(
      function () { 
        k.start(0);
        setTimeout(
          function () { 
            k.start(1);
            setTimeout(
              function () { 
                k.start(2);
                setTimeout(
                  function () {
                    k.timer();
                  }
                , 5000);
              }
            , 7000);
          }
        , 7000);
      }
    , 2000);
  };

  k.timer();


  window.unripe.index.carousel = {};

  var c = window.unripe.index.carousel;

  c.prev = function () {
    var slider = $('.slider')
      , images = slider.children('a')
      , limit = 6
      , length = images.length
      , prev = images.slice(length - limit)
      ;
  
    slider.addClass('prev');
    slider.prepend(prev.clone());
    prev.remove();
  };
  
  c.next = function () {
    var slider = $('.slider')
      , images = slider.children('a')
      , limit = 6
      , length = images.length
      , next = images.slice(0, 6)
      ;
  
    slider.removeClass('prev');
    slider.append(next.clone());
    next.remove();
  };
});
