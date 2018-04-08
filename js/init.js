(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $(".button-collapse").sideNav();
    $(".riffy-side-nav-btn").sideNav();
    $('.collapsible').collapsible();
    $('.modal').modal({
      startingTop: '4%',
      endingTop: '10%'
    });
    $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false,
      hover: false,
      belowOrigin: false,
      alignment: "left",
      stopPropagation: false
    });

    if(Cookies.get('mindkeepalive')==null) {
      Cookies.set('mindkeepalive', true, { expires: 10 });
    }
    else {
      if(Cookies.get('mindkeepalive')) {
        // DO ROUTINE CHECK EVERY 20 SECONDS
        setInterval(function() {
          if(isAlive()=='DEAD') {
            Cookies.remove('mindkeepalive');
          }
        }, 20000);
      }
    }

  });
})(jQuery);
