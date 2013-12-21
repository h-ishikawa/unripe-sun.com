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
    $('.home .header .tweet.tomori').eq(index).fadeIn('slow');
  };

  k.koike = function (index) {
    $('.home .header .tweet.koike').hide();
    $('.home .header .tweet.koike').eq(index).fadeIn('slow');
  };

  k.yoshino = function (index) {
    $('.home .header .tweet.yoshino').hide();
    $('.home .header .tweet.yoshino').eq(index).fadeIn('slow');
  };

  k.enomoto = function (index) {
    $('.home .header .tweet.enomoto').hide();
    $('.home .header .tweet.enomoto').eq(index).fadeIn('slow');
  };

  k.sakuma = function (index) {
    $('.home .header .tweet.sakuma').hide();
    $('.home .header .tweet.sakuma').eq(index).fadeIn('slow');
  };

  k.shimizu = function (index) {
    $('.home .header .tweet.shimizu').hide();
    $('.home .header .tweet.shimizu').eq(index).fadeIn('slow');
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
                k.timer();
              }
            , 5000);
          }
        , 5000);
      }
    , 5000);
  };

  k.timer();
});
