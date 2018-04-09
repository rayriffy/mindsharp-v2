<!DOCTYPE html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <noscript>
    <META HTTP-EQUIV="Refresh" CONTENT="0;URL=js_err.html">
   </noscript>
  <title>Mindsharp Story</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Noto+Sans+Thai+UI:300,400,500,700|Material+Icons&amp;subset=thai" rel="stylesheet" />
  <link href="/css/main.css" rel="stylesheet">
  <meta name="theme-color" content="#01579b">
  <meta name="msapplication-navbutton-color" content="#01579b">
  <meta name="apple-mobile-web-app-status-bar-style" content="#01579b">
  <meta name="Title" content="Mindsharp Story">
  <meta name="Keywords" content="Minecraft,Mindsharp,Survival">
  <meta name="Description" content="A Minecraft Server">
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Mindsharp Story" />
  <meta property="og:site_name" content="Mindsharp Story"/>
  <meta property="og:description" content="A Minecraft Server" />
  <meta property="og:image" content="img/pr1.jpg" />
  <link rel="icon" type="image/jpg" href="img/ico.jpg">
  <link rel="manifest" href="manifest.json">

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
    	background-image:url(img/loader.gif);
    	background-repeat:no-repeat;
    	background-position:center;
    	margin:-100px 0 0 -100px;
    }
  </style>
  <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>
  <script>
    var OneSignal = window.OneSignal || [];
    OneSignal.push(["init", {
      appId: "c692854b-d12c-4146-afb6-82668d7e5618",
      safari_web_id: "web.onesignal.auto.49809676-9f7f-4916-aef3-fd94958742a1",
      autoRegister: true,
      notifyButton: { enable: false }
    }]);
  </script>
</head>
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
<script type="text/javascript">
  $(window).on('load', function() { // SHOW PRELOAD UNTIL PAGE IS COMPLETELY LOADED
    $('#status').fadeOut();
    $('#preloader').delay(500).fadeOut('slow');
    $('body').delay(350).css({'overflow':'visible'});
  })
</script>
<body id="top">
  <div>
    <nav>
      <div class="nav-wrapper light-blue darken-3">
        <a href="#!" class="brand-logo center"><img src="img/ico.jpg" alt="logo" width="50px"></a>
        <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a></div>
        <ul class="left hide-on-med-and-down">
          <li class="active"><a href="#">Home</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
          <li><a href="#top" onclick="$('#signin').modal('open');">Sign In</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
          <li><a href="#top">ไทย</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <div id="index-banner" class="parallax-container riffyfullH">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="center light-blue-text text-lighten-1">Mindsharp Story</h1>
        <div class="row center">
          <h5 class="header col s12 light white-text">A Minecraft Server</h5>
        </div>
        <div class="row center">
          <a href="#content1" id="download-button" class="btn-large waves-effect waves-light light-blue">Click to scroll</a>
        </div>
        <br><br>
      </div>
    </div>
    <div class="scene">
      <div data-depth="0.2">
        <img src="img/par/1.jpg" alt="Unsplashed background img 1">
      </div>
      <div data-depth="0.4">
        <img src="img/par/2.jpg" alt="Unsplashed background img 2">
      </div>
      <div data-depth="0.6">
        <img src="img/par/3.jpg" alt="Unsplashed background img 3">
      </div>
    </div>
  </div>
  <div class="section white" id="content1">
    <div class="row container">
      <div class="col s12 l8">
        <h2 class="header">About</h2>
        <p class="grey-text text-darken-3 lighten-3">Mindsharp Story is a jfeoshfosijosifjksdfksd</p>
      </div>
      <div class="col s12 l4">
        <div class="row">
          <div class="card">
            <div class="card-content">
              <span class="card-title">NEWS</span>
              <div class="row">
                <table class="bordered highlight">
                  <tbody>
                    <?
                      $file = str_replace('news/','',array_diff(glob('news/*.md'), array('news/README.md')));
                      if(count($file)<=5)
                      {
                        $count_news=count($file);
                      }
                      else
                      {
                        $count_news=5;
                      }
                      for($i=0;$i<$count_news;$i++)
                      {
                        $file_ex=explode(".",$file[$i]);
                    ?>
                    <tr>
                      <td><b><? echo $file_ex[1]; ?></b></td>
                      <td class="right"><a href="news/?id=<? echo $file_ex[0]; ?>">MORE</a></td>
                    </tr>
                    <?
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-action">
              <center><a href="news.php" class="blue-text">VIEW ALL</a></center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <!-- <h5 class="header col s12 light">Minecraft is one of my best game in my life</h5> -->
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/pr2.jpg" alt="Unsplashed background img 2"></div>
  </div>
  <div class="section white" id="content2">
    <div class="row container">
      <h2 class="header">About</h2>
      <p class="grey-text text-darken-3 lighten-3">Mindsharp Story is a jfeoshfosijosifjksdfksd</p>
    </div>
  </div>
  <!--
  <div class="section white" id="content2">

  </div>
  -->

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
        <img src="img/pr3.jpg" alt="Unsplashed background img 2">
      </div>
      <a href="#!user"><svg style="width:64px;height:64px" viewBox="0 0 24 24"><path fill="#ffffff" d="M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z" /></svg></a>
      <a href="#!name"><span class="white-text name">Guest</span></a>
    </div></li>
    <li><a href="#top" onclick="$('#signin').modal('open');">Sign In</a></li>
    <li><a href="#top" onclick="$('#signup').modal('open');">Sign Up</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">© <? echo date("Y"); ?> Riffy Tech</a></li>
  </ul>


  <div id="signin" class="modal bottom-sheet">
    <div class="modal-content">
      <div class="container">
        <div class="row">
          <div class="col s12 l6 hide-on-med-and-down">
            <img class="responsive-img" src="img/gal/9.jpg" />
          </div>
          <div class="col s12 l4 offset-l2">
            <div class="row">
              <h4>Sign In</h4>
            </div>
            <div class="row">
              <div class="col s12">
                <center>Please make sure that your computer is playing in Mindsharp server before signing in!</center>
              </div>
            </div>
            <div class="row">
              <button id="signinbtn" class="btn light-blue waves-effect waves-light col s12">SIGN IN</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script src="/js/init.js" async></script>
  <script src="/api/firebase.js"></script>

  <!-- Service Worker -->
  <script type="text/javascript">
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
      navigator.serviceWorker.register('/sw.js');
    });
  }
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
    $(function() {
      $("#signinbtn").click(function() {
        $(this).addClass("disabled");
        $(this).text("SIGNING IN");
      });
    });
    var scene = document.getElementById('scene');
    var parallaxInstance = new Parallax(scene, {
      relativeInput: true
    });
  </script>
</body>
</html>
