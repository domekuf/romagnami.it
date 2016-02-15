<!DOCTYPE html>
<html lang="it">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Romagnami - Pagina Ufficiale</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

  <!-- FACEBOOK INTEGRATION-->
  <!--modifica fatta da pc-->
  
  <script>
function append(photos){
	html='';
	html+='<div class="row no-gutter">';
	for (i=0;i<6;i++){
                html+='<div class="col-lg-4 col-sm-6">';
                html+='    <a href="#" class="portfolio-box">';
                html+='        <img style="max-width:650!important;max-height:350!important" src="'+photos.data[i].images[0].source+'" class="img-responsive" alt="">';
                html+='        <div class="portfolio-box-caption">';
                html+='            <div class="portfolio-box-caption-content">';
                html+='                <div class="project-category text-faded">';
                html+='                    Foto del';
                html+='                </div>';
                html+='                <div class="project-name">';
                html+='                    Diario';
                html+='                </div>';
                html+='            </div>';
                html+='        </div>';
                html+='    </a>';
                html+='</div>';
                }
    html+='</div>';
    //$('#portfolios').append(html);

}

  var FB;
  var photos;
  function myFacebookLogin() {
  FB.login(function(){
  	FB.api(
    "/308638509268623?fields=photos{images}",
    function (response) {
    	console.log(response);
      if (response && !response.error) {
        photos=response.photos;
        console.log(photos);
        append(photos);
      }
    }
	);
  }, {});
}
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '849548771811110',
      xfbml      : true,
      version    : 'v2.5'
    });
    //console.log(FB);
    //myFacebookLogin();
	
  };

	
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

// Only works after `FB.init` is called

</script>
  
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.5&appId=398174800352292";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));



</script>


    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Romagnami</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Chi Siamo</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">I nostri prodotti</a>
                    </li>
                    <!--li>
                        <a class="page-scroll" href="#portfolio">Le ultime invenzioni</a>
                    </li-->
                    <li>
                        <a class="page-scroll" href="#contact">Contatti</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
            	<br>
            	<hr>
                <h1>Romagnami</h1>
                <hr>
                <p>Viale Ennio, 11 - Igea Marina (RN)<br><br>
                <a href="https://maps.google.com?daddr=Igea+Marina+Viale+Ennio+11" class="btn btn-primary btn-xl page-scroll">Naviga</a><br><br>
                <!--a onclick="myFacebookLogin()" class="btn btn-primary btn-xl page-scroll" id="fb-btn">Login con Facebook</a--></p>

            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Chi Siamo</h2>
                    <hr class="light">
                    <p class="text-faded">
                    Seguici su Facebook</p>
                    <a  href="https://www.facebook.com/Romagnami-307688816030259" class="btn btn-default btn-xl wow bounceIn"><i class="fa fa-4x fa-facebook wow bounceIn text-primary"></i><br>
                    <div style="margin:0 auto" class="fb-like" 
                    data-href="https://www.facebook.com/Romagnami-307688816030259" 
                    data-width="50" 
                    data-layout="standard" 
                    data-action="like" 
                    data-show-faces="true" 
                    data-share="false"></div></a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">I nostri Prodotti</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-cutlery wow bounceIn text-primary"></i>
                        <h3>Da Asporto</h3>
                        <p class="text-muted">Pasti veloci, gustosi e leggeri. Da noi o in spiaggia.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>A Domicilio</h3>
                        <p class="text-muted">Durante tutto l'anno puoi continuare ad acquistare i nostri prodotti, e riceverli a casa tua.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Sempre Aggiornati</h3>
                        <p class="text-muted">É fondamentale conoscere e far conoscere i nostri prodotti. Per questo siamo sempre aggiornati.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Preparato con Cura</h3>
                        <p class="text-muted">Mettiamo la massima cura ed esperienza in quello che prepariamo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid" id="portfolios">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Yogurt Gelato
                                </div>
                                <div class="project-name">
                                    Sempre fresco e arricchito con i migliori ingredienti
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Ceramica
                                </div>
                                <div class="project-name">Le migliori ceramiche di Faenza, rigorosamente originali e artigianali</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    frutta fresca
                                </div>
                                <div class="project-name">Granite, Estratti, Frullati. Sempre con Frutta Fresca e di Stagione</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">succhi di frutta e bevande</div>
                                <div class="project-name">Sempre biologici, sempre i migliori</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">stampe romagnole</div>
                                <div class="project-name">Fatte a ruggine come da tradizione, dai migliori artigiani Romagnoli</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    frutta secca
                                ed essiccata</div>
                                <div class="project-name">Ottima nel Gusto e per la Salute</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Free Download at Start Bootstrap!</h2>
                <a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a>
            </div>
        </div>
    </aside-->

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Teniamoci in Contatto</h2>
                    <hr class="primary">
                    <p>Il modo migliore per conoscerci é venire a trovarci, se non puoi farlo subito contattaci</p>
                </div>
                <!--div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-6789</p>
                </div-->
                <div class="col-lg-12 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:romagnami@gmail.com">romagnami@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>
       <div style="height: 600px;" id="map">
      </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

     <script>
	 var map;
	 var myLatLng = {lat: 44.133208, lng: 12.483134};
      function initMap() {
  // Create a map object and specify the DOM element for display.

  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 44.133208, lng: 12.483134},
    scrollwheel: false,
    zoom: 15
  });
}
</script>

	<!--google maps-->
 	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCZnrD4Oz_icKMUVaY46slLhxVXYzAbbho&callback=initMap"></script>
	<!--marker with label-->
    <script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerwithlabel/src/markerwithlabel.js"></script>
    <script>
	
  var image = '<i class="fa fa-map-marker fa-3x" style="color:rgba(148,1,28,.6);"></i>';
  var marker = new MarkerWithLabel({
    position: myLatLng,
    //map: map,
    //title: 'Romagnami',
	icon: ' ',
	labelContent: image,
    labelAnchor: new google.maps.Point(22, 50)
  });
  marker.setMap(map);
	</script>
</html>
