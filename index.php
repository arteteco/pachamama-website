	<?php
	
	if (isset($_POST['submit'])){
		$email = $_POST['email'];
		$msg = $_POST['msgtxt'];
		$from = 'Contact Form Pachamama Center';
		$to = 'luz.pachamama@gmail';
		$subject = 'Messeage from Pachamama Center Contact Form';
		$body = "from $email\n\n $msg";
		
	// check if email has been entered and is valid
	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid e-mail adress';
		}
	if (!$_POST['msgtxt']) {
		$errMessage = 'Please enter your message';
	}

	if (mail ($to, $subject, $body, $from)) {
			$result = '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Sporočilo je uspešno poslano</div>';
	} else { 
			$result = '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Sporočilo ni bilo poslano. Preverite obrazec.</div>';
	}
		
	
	}
	
	?>
<!DOCTYPE HTML>
<html lang="si">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pachamama Center, Natural Cosmetics, Art Gallery">


    
	<title>Pachamama Center</title>


	<!-- Bootstrap Core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  rel="stylesheet">
    
	<!-- Custom Fonts -->
    <link href="font/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Aclonica|Poiret+One|Kaushan+Script|Leckerli+One" rel="stylesheet">
	<link href="css/fontello.css" rel="stylesheet">
    
    <!-- Theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>




	<div class="scrollup">
	<a href="#"><i class="icon-angle-circled-up"></a></i>
	</div>

	<!-- MENU NAV -->
	<header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<div id="custom-bootstrap-menu" class="navbar navbar-default navbar-static-top" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<a class="navbar-brand" href="index.html"><img src="img/logopm.png"></a>
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					
						<div class="collapse navbar-collapse navbar-menubuilder">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#" data-id="onas">O nas</a></li>
								<li><a href="#" data-id="galerija">Galerija</a></li>
								<li><a href="#" data-id="shop">Shop</a></li>
								<li><a href="#" data-id="kontakt">Kontakt</a></li>
							</ul>
						</div>
					</div>
				<!-- end of menu -->		
				</div>
			
			<!-- end of col -->
			</div>
		<!-- end of row -->
		</div>
		
		<div class="row">
			<div class="col-xs-12">
				<img src="img/logopm.png" class="img-responsive center-block valignator">
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12">
				<h4 class="firstone">.... je prostor, kjer se stikata nebo in zemlja.</h4>
				<h4>Kjer se mešajo različne kulture in slogi.</h4>
				<h4>Kjer vsakodnevne aktivnosti prehajajo v umetnost.</h4>
				<h4 class="lastone">Kjer duhovno preseže materialno ...</h4>
			</div>
		<!-- end of row -->
		</div>
	
	<!-- end of container-fluid -->
	</div>		
	</header>
	
	<article>
	<div class="container-fluid container-yellow">
			<section id="onas">
				<div class="row">
					<div class="col-lg-12">
							<h2 class="section-heading">O nas</h2>
					</div>
				</div>
				
				
				<div class="row">	
					<div class="col-xs-12">
						<!-- carousel -->
						<div id="custom-bootstrap-carousel" class="carousel slide" data-ride="carousel" data-interval="false" data-wrap="false">
							<ol class="carousel-indicators">
								<li data-target="#custom-bootstrap-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#custom-bootstrap-carousel" data-slide-to="1" class></li>
								<li data-target="#custom-bootstrap-carousel" data-slide-to="2"></li>
								<li data-target="#custom-bootstrap-carousel" data-slide-to="3"></li>
							</ol>
							
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<img src="img/carouselpics/1.jpg" class="img-responsive">
									<div class="carousel-caption" id="sticktotop">Pachamama Center</div>
									<div class="carousel-caption">... je prostor, kjer se stikata nebo in zemlja. Kjer se mešajo različne kulture in slogi. Kjer vsakodnevne aktivnosti prehajajo v umetnost. Kjer duhovno preseže materialno ...</div>
								</div>
								
								<div class="item">
									<img src="img/carouselpics/2.jpg">
									<div class="carousel-caption" id="sticktotop">Pachamama Center</div>
									<div class="carousel-caption">...je ekološka domačija in še veliko več. Je dom, ki sta si ga ustvarila Dhiraj in Luz, Slovenec in Perujka Inkovskega porekla. To je center harmoničnega bivanja, neskončne ustvarjalnosti in popolnega miru. Pachamama center je v slovenskem
										prostoru prototip sodobnega bivanja , ki ne pozna konkurence</div>
								</div>
								
								<div class="item">
									<img src="img/carouselpics/3.jpg">
									<div class="carousel-caption" id="sticktotop">Umetnostno struženja Lesa</div>
									<div class="carousel-caption">Ideja struženja lesa pomeni za Dhiraja izraziti tisto nekaj skrivnostno lepega kar je bilo sicer že ves čas prisotno tukaj v kosu mogoče zavrženega lesa, vendar našim očem skrito... Stružene izdelke iz raznovrstnega lesa si je možno ogledati
										in jh kupiti v domači &quot;Zen galeriji&quot; v Pachamama centru.</div>
								</div>
								
								<div class="item">
									<img src="img/carouselpics/4.jpg">
									<div class="carousel-caption" id="sticktotop">Vipassana Meditacija</div>
									<div class="carousel-caption">...je najboljše zdravilo za vse tegobe in bolezni današnjega časa. V Pachamama centru se izvaja vipassana v obliki enodnevnih in dvo dnevnih - vikend delavnic, kakor tudi v obliki pet in deset dnevne, intenzivne vadbe vipassane. Sedeča meditacija poteka skupaj z meditacijo v hoji in je prirejena za sodobnega človeka. Vse meditacije se izvajajo v popolni tišini čudovitega podeželja Slovenskih goric. <a href="http://vipassana.si" target="_blank">vipassana.si</a></div>
								</div>
							</div>
							
							<a class="left carousel-control" href="#custom-bootstrap-carousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							
							<a class="right carousel-control" href="#custom-bootstrap-carousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						<!-- end of carousel-->
						</div>
					<!-- end of col -->
					</div>
				<!-- end of row -->
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<div class="buttoncontainer">
							<a data-toggle="collapse" data-target="#aboutpacha"><img src="img/buttons/1.png" class="img-responsive img-circle center-block"></a>
						 </div>
					</div>
					
					<div class="col-md-6">
						<div class="collapseheader">
							<h3>O Pachamama Centru</h3>
							<div class="collapse" id="aboutpacha">
								<p class="text-muted text-justify">Pachamama Center je ekološka domačija in še veliko več. Je dom, ki sta si ga ustvarila Dhiraj in Luz, Slovenec in Perujka Inkovskega porekla. To je center harmoničnega bivanja, neskončne ustvarjalnosti in popolnega miru. Pachamama center je v slovenskem	prostoru prototip sodobnega bivanja , ki ne pozna konkurence</p>
							</div>
						</div>
					</div>
				<!-- end of row -->
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<div class="buttoncontainer">
							<a data-toggle="collapse" data-target="#artwood"><img src="img/buttons/2.png" class="img-responsive img-circle center-block"></a>
						 </div>
					</div>
					
					<div class="col-md-6">
						<div class="collapseheader">
							<h3>Umetnostno struženja Lesa</h3>
							<div class="collapse" id="artwood">
								<p class="text-muted text-justify">Ideja struženja lesa pomeni za Dhiraja izraziti tisto nekaj skrivnostno lepega kar je bilo sicer že ves čas prisotno tukaj v kosu mogoče zavrženega lesa, vendar našim očem skrito... Stružene izdelke iz raznovrstnega lesa si je možno ogledati	in jh kupiti v domači &quot;Zen galeriji&quot; v Pachamama centru.</p>
							</div>
						</div>
					</div>
				<!-- end of row -->
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<div class="buttoncontainer">
							<a data-toggle="collapse" data-target="#meditation"><img src="img/buttons/3.png" class="img-responsive img-circle center-block"></a>
						 </div>
					</div>
					
					<div class="col-md-6">
						<div class="collapseheader">
							<h3>Vipassana Meditacija</h3>
							<div class="collapse" id="meditation">
								<p class="text-muted text-justify">...je najboljše zdravilo za vse tegobe in bolezni današnjega časa. V Pachamama centru se izvaja vipassana v obliki enodnevnih in dvo dnevnih - vikend delavnic, kakor tudi v obliki pet in deset dnevne, intenzivne vadbe vipassane. Sedeča meditacija poteka skupaj z meditacijo v hoji in je prirejena za sodobnega človeka. Vse meditacije se izvajajo v popolni tišini čudovitega podeželja Slovenskih goric.</p>
								<p class="text-center"><a href="http://vipassana.si" target="_blank">vipassana.si</a></p>
							</div>
						</div>
					</div>
				<!-- end of row -->
				</div>
				
				<div class="row">
					<div class="col-xs-12">
						<h2 class="section-heading">Ustvarjalci</h2>
					</div>
				<!--end of row-->
				</div>
				
				<div class="row">
					
					<div class="col-sm-4">
						<div class="team-member">
							<a data-toggle="collapse" data-target="#dhiraj">
								<img src="img/team/1.jpg" class="img-responsive img-circle center-block" alt="Dhiraj Rochamann">
							</a>
							<h3>Dhiraj Roschamann</h3>
                            <p class="text-center"><a href="https://www.facebook.com/ufo321" target="_blank"><i class="icon-facebook-circled"></i></a></p>
							<div class="collapse" id="dhiraj">
								<p class="text-muted text-justify">
									Se je žpri svojih 22 letih odpravil na svoje skoraj deset letno potovanje po svetu iskat smisel in rešitve za življenje. Po vrnitvi v domači kraj se je ustalil in začel skozi različne oblike kreativnosti in meditacije deliti svoje izkušnje in znanje.
								</p>
								<p class="text-muted text-justify">
									Zavzema se za načelo, da ni važno kaj počneš vse lahko postane meditacija in s tem priložnost za globji uvid v življenje.
								</p>
							</div>
                        </div>
					</div>
					
					<div class="col-sm-4">
						<div class="team-member">
                            <a data-toggle="collapse" data-target="#luz">
								<img src="img/team/2.jpg" class="img-responsive img-circle center-block" alt="Dhiraj Rochamann">
							</a>
                            <h3>Luz Soto Bravo</h3>
							<p class="text-center"><a href="https://www.facebook.com/lsbravo1" target="_blank"><i class="icon-facebook-circled"></i></a></p>
							<div class="collapse" id="luz">
								<p class="text-muted text-justify">Some biography here</p>
							</div>
                        </div>
					</div>
					
					<div class="col-sm-4">
						<div class="team-member marginbottom">
							<a data-toggle="collapse" data-target="#osho">
								<img src="img/team/3.jpg" class="img-responsive img-circle center-block" alt="Dhiraj Rochamann">
							</a>
                            <h3>Osho Roschamann Soto</h3>
							<div class="collapse" id="osho">
								<p class="text-muted text-justify">Some biography here</p>
							</div>
                        </div>
					</div>
					
				<!-- end of row -->
				</div>
				
			</section>
		<!-- end of container -->
		</div>
		
		<div class="container-fluid container-brown">
			<section id="galerija">
				
				<div class="row">
					<div class="col-xs-12">
						<h2 class="section-heading">Foto-galerija</h2>
					</div>
				<!--end of row -->
				</div>
				
				<div class="row">
					<div class="col-sm-3">
						<div class="imgbox">
							<label for="okolica" class="center-block">Okolica</label>
							<a href="gallery.php#okolica">
							<img class="img-circle img-responsive img-thumbnail" src="img/about/1.jpg" alt="" id="okolica">
							</a>
							
							<a href="gallery.php#okolica">
								<div class="imgcover">
									<p>Okolica</p>
								</div>
							</a>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="imgbox">
							<label for="struzenja" class="center-block">Struženja</label>
							<a href="gallery.php#struzenja">
							<img class="img-circle img-responsive img-thumbnail" src="img/about/2.jpg" alt="" id="struzenja">
							</a>
							
							<a href="gallery.php#struzenja">
								<div class="imgcover">
									<p>Struženja</p>
								</div>
							</a>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="imgbox">
							<label for="mozaiki" class="center-block">Mozaiki</label>
							<a href="gallery.php#mozaiki">
							<img class="img-circle img-responsive img-thumbnail" src="img/about/3.jpg" alt="" id="mozaiki">
							</a>
							
							<a href="gallery.php#mozaiki">
								<div class="imgcover">
									<p>Mozaiki</p>
								</div>
							</a>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="imgbox">
							<label for="izdelki" class="center-block">Izdelki</label>
							<a href="gallery.php#izdelki">
							<img class="img-circle img-responsive img-thumbnail" src="img/about/4.jpg" alt="" id="izdelki">
							</a>
							
							<a href="gallery.php#izdelki">
								<div class="imgcover">
									<p>Izdelki</p>
								</div>
							</a>
						</div>
					</div>
				<!--end of row -->
				</div>
				
			</section>
		<!-- end of container-->
		</div>
		
		<div class="container-fluid container-green">
			<section id="shop">
				<div class="row">
					<div class="col-xs-12">
						<h2 class="section-heading">
						Shop
						</h2>
					</div>
				<!-- end of row -->
				</div>
				
				<div class="row">
					<div class="col-xs-12">
						<div class="shop-intro">
							<p class="text-center">Some intro here</p>
						</div>
					</div>
				<!--- end of row -->
				</div>
				
				<div class="row">
					<div class="col-xs-12">
						<div class="shop-button marginbottom">
							<p class="text-center"><a href="https://www.etsy.com/shop/PACHAMAMASLOVENIA?ele=shop_open" target="_blank"><i class="icon-cart"></i> <span class="hidden-xs">našli nas na</span> etsy.com</p></a>
						</div>
					</div>
				<!--- end of row -->
				</div>
			</section>
		<!-- end of container -->
		</div>
		
		
		<div class="container-fluid container-brown">
			<section id="kontakt">
				<div class="row">
				
					<div class="col-xs-12">
						<h2 class="section-heading">Kontakt</h2>
						<?php 
							if (isset($_POST['submit'])){
								echo $result; 
							}
						?>
					</div>
				
				<!-- end of row -->
				</div>
				
				<div class="row">
					<div class="col-lg-4">
						<div class="contactbox">
							<p>Slovenija</p>
							<p>9245 Spodnji Ivanjci</p>
							<p class="spacer">Kunova 13</p>
							<p><i class="icon-mobile"></i>+386 (0)31270943</p>
							<p><i class="icon-mobile"></i>+386 (0)31270943</p>
							<p class="spacer"><i class="icon-mail"></i>&nbsp;luz.pachamama@gmail.com</p>
						</div>
						
						<div class="formbox visible-lg-block">
							<form action="index.php#kontakt" method="post">							
								<div class="form-group">
									<label for="mail" class="sr-only">E-mail:</label>
									<input type="email" class="form-control" id="mail" name="email" placeholder="E-mail"></input>
								</div>
								
								<div class="form-group">
									<label for="msg" class="sr-only">Sporočilo:</label>
									<textarea class="form-control" id="msg" name="msgtxt" placeholder="Sporočilo"></textarea>
								</div>
								<button type="submit" name="submit" class="btn btn-warning btn-block">Pošlji</button>
							</form>
						</div>
					</div>
					
					
					<div class="col-lg-8">
						<div class="embed-responsive embed-responsive-4by3" id="map">	
							<!-- GOOGLE MAPS PLUGIN IS HERE -->
						</div>
					</div>
				<!-- end of row -->
				</div>
				
				<div class="row">
					<div class="col-xs-12">
						<div class="formbox hidden-lg spacer">
							<p>Kontaktni obrazec</p>
							
							<form>							
								<div class="form-group">
									<label for="mail">E-mail:</label>
									<input type="email" class="form-control" id="mail" name="email"></input>
								</div>
								
								<div class="form-group">
									<label for="msg">Sporočilo:</label>
									<textarea class="form-control" id="msg" name="msgtxt"></textarea>
								</div>
								<button type="submit" class="btn btn-warning btn-block" name="submit">Pošlji</button>
							</form>
						</div>
					</div>
				<!-- end of row -->
				</div>
			</section>
			
		<!-- end of container -->
		</div>
	</article>
	
	<div class="container-fluid container-footer">
		<footer>
			<div class ="row">
			
				<div class="col-xs-6">
					<p>Pachamama Center &copy; 2017</p>
				</div>
				
				<div class="col-xs-6">
					<a href="https://www.facebook.com/samo.rovscek" target="_blank"><i class="icon-facebook-circled"></i></a>
				</div>
				
			
			<!-- end of row -->
			</div>
		</fotter>
	<!-- end of container -->
	</div>

	
	
	
	
	
	<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Contact Form JavaScript -->	
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/agency.js"></script>
	<!-- check the window screen and set navbar fixed is it is mobile-->
	<script src="js/isnavbarfixed.js"></script>
	<!-- scrollTo core -->
	<script src="js/jquery.scrollTo.min.js"></script>
	<!-- scrolling function and scrollup fading in/out -->
	<script src="js/scrolling.js"></script>
	<!--- google maps plugins-->
	<script src="js/gogmaps.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLzV_rcrfVzcQIp9FC02VjyPozwzlqegs&callback=initMap">
    </script>
</body>

</html>