$(function () {
  if (typeof window.ishikawa === 'undefined') {
    window.ishikawa = {};
  }

  if (typeof window.ishikawa.panel === 'undefined') {
    window.ishikawa.scroll = {};
  }

  //var s = window.ishikawa.scroll;

  $(function() {
	  var showFlag = false;

	  $('.pageTop').css('bottom', '-100px');

	  $(window).scroll(function () {
	  	if ($(this).scrollTop() > 100) {
	  		if (showFlag === false) {
	  			showFlag = true;
	  			$('.pageTop').stop().animate({
            'bottom' : '20px'
          }, 200); 
	  		}
	  	}
      
      else {
	  		if (showFlag) {
	  			showFlag = false;
	  			$('.pageTop').stop().animate({
            'bottom' : '-100px'
          }, 200); 
	  		}
	  	}
	  });

    $('.pageTop').click(function () {
		  $('body, html').animate({
		  	scrollTop: 0
		  }, 500);

		  return false;
    });
  });
});
