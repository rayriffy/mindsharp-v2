<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tickets | Mindsharp Story</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <meta name="theme-color" content="#01579b">
  <meta name="msapplication-navbutton-color" content="#01579b">
  <meta name="apple-mobile-web-app-status-bar-style" content="#01579b">
  <meta name="Title" content="Donation | Mindsharp Story">
  <meta name="Keywords" content="Minecraft,Mindsharp,Survival">
  <meta name="Description" content="Mindsharp Story">
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Donation | Mindsharp Story" />
  <meta property="og:site_name" content="Mindsharp Story"/>
  <meta property="og:description" content="Mindsharp Story" />
  <meta property="og:image" content="https://testtube.rayriffy.com/mindsharp/img/pr1.jpg" />
  <link rel="icon" type="image/jpg" href="../../img/ico.jpg">
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }
    .riffyfullH {
      height: 100vh !important;
    }
    .carousel-slider {
    height: 400px !important;
    }
    .dropdown-content {
      width: 250px  !important;
    }
  </style>
  <style>
    body {
    	overflow: hidden;
    }
    #preloader {
    	position: fixed;
    	top:0;
    	left:0;
    	right:0;
    	bottom:0;
    	background-color:#ffffff;
    	z-index:99;
    }

    #status {
    	width:200px;
    	height:200px;
    	position:absolute;
    	left:50%;
    	top:50%;
    	background-image:url(../../img/loader.gif);
    	background-repeat:no-repeat;
    	background-position:center;
    	margin:-100px 0 0 -100px;
    }
  </style>
  <style>
  .input-field label {
    color: #000;
  }
  /* label focus color */
  .input-field input[type=text]:focus + label {
    color: #2196f3;
  }
  /* label underline focus color */
  .input-field input[type=text]:focus {
    border-bottom: 1px solid #2196f3;
    box-shadow: 0 1px 0 0 #2196f3;
  }
  /* valid color */
  .input-field input[type=text].valid {
    border-bottom: 1px solid #2196f3;
    box-shadow: 0 1px 0 0 #2196f3;
  }
  /* invalid color */
  .input-field input[type=text].invalid {
    border-bottom: 1px solid #2196f3;
    box-shadow: 0 1px 0 0 #2196f3;
  }
  /* icon prefix focus color */
  .input-field .prefix.active {
    color: #2196f3;
  }
  </style>
</head>
<body id="top">
  <div>
    <nav>
      <div class="nav-wrapper light-blue darken-3">
        <a href="#!" class="brand-logo center"><img src="../../img/ico.jpg" width="50px"></a>
        <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a></div>
        <ul class="left hide-on-med-and-down">
          <li class="active"><a href="#">Home</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
          <li><a href="#user">Ray</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="section white">
    <div class="container">
      <div class="row">
        <div class="col l12 s12">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Ticket</span>
              <div class="row">
                <a class="col l4 offset-l4 s6 offset-s3 btn blue waves-effect waves-light" onclick="paymentRequest.show();">PAY</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="page-footer light-blue darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Mindsharp Story</h5>
          <p class="grey-text text-lighten-4">>///<</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Get in touch</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="https://web.facebook.com/mindsharpth">Facebook</a></li>
            <li><a class="grey-text text-lighten-3" href="#top">Twitter</a></li>
            <li><a class="grey-text text-lighten-3" href="#content">Email</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © <? echo date("Y"); ?> Riffy Tech
      <a class="grey-text text-lighten-4 right" href="https://facebook.com/rayriffy">Contact Dev</a>
      </div>
    </div>
  </footer>
  <ul id="nav-mobile" class="side-nav fixed hide-on-large-only">
    <li><div class="userView">
      <div class="background">
        <img src="img/pr3.jpg">
      </div>
      <a href="#!user"><svg style="width:64px;height:64px" viewBox="0 0 24 24"><path fill="#ffffff" d="M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z" /></svg></a>
      <a href="#!name"><span class="white-text name">Guest</span></a>
    </div></li>
    <ul class="collapsible" data-collapsible="accordion">
      <li class="active">
        <div class="collapsible-header"><i class="material-icons">perm_identity</i>Sign In</div>
        <div class="collapsible-body">
          <div class="container">
            <div class="row">
              <div class="input-field col s12">
                <input id="dsk_usr" placeholder="Username" name="log_usr" required type="text" class="validate">
              </div>
              <div class="input-field col s12">
                <input id="dsk_pas" placeholder="Password" name="log_pas" required type="password" class="validate">
              </div>
            </div>
            <div class="row">
              <button type="submit" name="input_check" value="LOGIN" class="btn light-blue waves-effect waves-light col s12">SIGN IN</button>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">note_add</i>Sign Up</div>
        <div class="collapsible-body">
          <div class="container">
            <div class="row">
              <div class="input-field col s12">
                <input id="dsk_regusr" placeholder="Username" name="reg_usr" required type="text" class="validate">
              </div>
              <div class="input-field col s12">
                <input id="dsk_regpas" placeholder="Password" name="reg_pas" required type="password" class="validate">
              </div>
              <div class="input-field col s12">
                <input id="dsk_regvpas" placeholder="Verify Password" name="reg_vpas" required type="password" class="validate">
              </div>
              <div class="input-field col s12">
                <input id="dsk_regmail" placeholder="Email" name="reg_mail" type="email" required class="validate">
              </div>
            </div>
            <div class="row">
              <button type="submit" name="input_check" value="REGIS" class="btn light-blue waves-effect waves-light col s12">SIGN UP</button>
            </div>
          </div>
        </div>
      </li>
    </ul>
    <li><div class="divider"></div></li>
    <li><a class="subheader">© <? echo date("Y"); ?> Riffy Tech</a></li>
  </ul>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../../js/payment.js"></script>
  <script src="../../js/materialize.js"></script>
  <script src="../../js/init.js"></script>
  <script type="text/javascript">
    $(window).on('load', function() { // SHOW PRELOAD UNTIL PAGE IS COMPLETELY LOADED
      $('#status').fadeOut();
      $('#preloader').delay(500).fadeOut('slow');
      $('body').delay(350).css({'overflow':'visible'});
    })
  </script>
</body>
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
</html>

<!-- JS SETUP -->
<script type="text/javascript">
  $(document).ready(function(){
    var toast = Materialize.toast('Loading...', 3000);
    $(".button-collapse").sideNav();
    $(".riffy-side-nav-btn").sideNav();
    $('.carousel.carousel-slider').carousel({full_width: true});
    $('.collapsible').collapsible();
    $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false,
      hover: false,
      belowOrigin: false,
      alignment: "left",
      stopPropagation: false
    });
  });
</script>
<!-- ANIMATE SCROLL -->
<script type="text/javascript">
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
</script>
