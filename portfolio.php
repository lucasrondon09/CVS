<?php
include('conexao.php');

$idporfolio = 7;

$query = "update galeria set views = views+1 where idgaleria=".$idporfolio;
$execQuery = mysql_query($query);



?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>CVS Foto e Vídeo</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">	
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="assets/css/set1.css" />	
<link rel="stylesheet" href="assets/custom.css">
<link rel="stylesheet" href="assets/style.css">


	
<meta property="og:title" content="Fashion Book - Barbara - ">
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Esse é um titulo" />
<meta property="og:description"   content="Essa é uma descrição" />
<!--<meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />	-->

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="images/logo.png" alt="logo"></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#home">Inicio</a></li>
                 <li ><a href="#about">Sobre</a></li>
                 <li ><a href="#works">Portfólio</a></li>
                 <li ><a href="#partners">Parceiros</a></li>
                 <li ><a href="#contact">Contatos</a></li>
				 <li ><a href="#" class="btn btn-warning btn-lg active btn-txt" role="button" aria-pressed="true"><i class="fa fa-lock"></i> Área do Cliente</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->


<!-- works -->
<div id="home"  class="clearfix grid"> 
	<h1>Gestantes</h1>
	<p>Sessão de fotos gestante</p>
	<p><i class="far fa-eye"></i> 266 Visualizações</li></p>
		
				
					<figure class="effect-zoe">
						<img src="images/portfolio/1.jpg" alt="img25"/>
						<figcaption>
							<div class="text-center">
							<ul class="list-unstyled list-inline">
								<li><a href="images/portfolio/1.jpg" title="Gestante" data-gallery><i class="fas fa-search-plus social-btn btn-zoom"></i></a></li>
								<li><a href="#" title="Compartilhe via Facebook!"><i class="fab fa-facebook-square social-btn btn-face"></i></a></li>
								<li><a href="#" title="Compartilhe via Twitter!"><i class="fab fa-twitter social-btn btn-twitter"></i></a></li>
								<li><a href="#" title="Compartilhe via Pinterest!"><i class="fab fa-pinterest social-btn btn-pint"></i></a></li>
							</ul>
							</div>
						</figcaption>			
					</figure>
					<figure class="effect-zoe">
						<img src="images/portfolio/2.jpg" alt="img26"/>
						<figcaption>
							<div class="text-center">
							<ul class="list-unstyled list-inline">
								<li><a href="images/portfolio/2.jpg" title="Gestante" data-gallery><i class="fas fa-search-plus social-btn btn-zoom"></i></a></li>
								<li><a href="#" title="Compartilhe!"><i class="fab fa-facebook-square social-btn btn-face"></i></a></li>
								<li><a href="#" title="Obrigado!"><i class="fas fa-heart social-btn btn-heart"></i></a></li>
							</ul>
							</div>	
						</figcaption>			
					</figure>
	<figure class="effect-zoe">
						<img src="images/portfolio/2.jpg" alt="img26"/>
						<figcaption>
							<div class="text-center">
							<ul class="list-unstyled list-inline">
								<li><a href="images/portfolio/2.jpg" title="Gestante" data-gallery><i class="fas fa-search-plus social-btn btn-zoom"></i></a></li>
								<li><a href="#" title="Compartilhe!"><i class="fab fa-facebook-square social-btn btn-face"></i></a></li>
								<li><a href="#" title="Obrigado!"><i class="fas fa-heart social-btn btn-heart"></i></a></li>
							</ul>
							</div>	
						</figcaption>			
					</figure>
	<figure class="effect-zoe">
						<img src="images/portfolio/1.jpg" alt="img25"/>
						<figcaption>
							<div class="text-center">
							<ul class="list-unstyled list-inline">
								<li><a href="images/portfolio/1.jpg" title="Gestante" data-gallery><i class="fas fa-search-plus social-btn btn-zoom"></i></a></li>
								<li><a href="#" title="Compartilhe!"><i class="fab fa-facebook-square social-btn btn-face"></i></a></li>
								<li><a href="#" title="Obrigado!"><i class="fas fa-heart social-btn btn-heart"></i></a></li>
							</ul>
							</div>
						</figcaption>			
					</figure>
				
	
	


</div>
				

<script type="text/javascript">
	

</script>
	
<!-- Footer Starts -->
<div class="footer text-center spacer">
<p class="wowload flipInX"><a href="https://www.facebook.com/cosmeweslley"><i class="fa fa-facebook fa-2x"></i></a> <a href="https://www.instagram.com/cvsfotoevideo/"><i class="fa fa-instagram fa-2x"></i></a>  <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5565981344166"><i class="fab fa-2x fa-whatsapp"></i></a></p>
CVS Foto e Vídeo &copy 2018. Todos os direitos reservados.
</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>





<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>



<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="assets/script.js"></script>

</body>
</html>