<?php

include("start/conexao.php");


?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>CVS Foto e Vídeo</title>


<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css' >
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">	
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="assets/custom.css">
	

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	
	
<div class="topbar animated fadeInLeftBig"></div>

<!-- Cabecalho -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo -->
              <a class="navbar-brand" href="index.php#home"><img src="images/logo.png" alt="logo"></a>
              <!-- #Logo -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Navbar -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="index.php#home">Inicio</a></li>
                 <li ><a href="index.php#sobre">Sobre</a></li>
                 <li ><a href="index.php#portfolio">Portfólio</a></li>
                 <li ><a href="index.php#depoimentos">Depoimentos</a></li>
				 <li ><a href="index.php#projetos">Projetos</a></li> 
                 <li ><a href="index.php#contatos">Contatos</a></li>
				 <li ><a href="start/login.php" class="btn btn-warning btn-lg active btn-txt" role="button" aria-pressed="true"><i class="fa fa-lock"></i> Área Restrita</a></li>
              </ul>
            </div>
            <!-- #Navbar -->

          </div>
        </div>

      </div>
    </div>
<!-- #Cabecalho -->



<!-- works -->
<div id="home"  class="clearfix grid"> 

	
	<?php
	
	$idgal = $_GET['idgaleria'];
	
	$queryHead = "select * from galeria where idgaleria = ".$idgal;
	
	$exeQueryHead = mysql_query($queryHead);
	$exeQueryHeadRows = mysql_num_rows($exeQueryHead);
	
	if($exeQueryHeadRows > 0){
		$resultHead = mysql_fetch_array($exeQueryHead);
	}
	
	echo '
	
	<h1>'.$resultHead['titulo'].'</h1>
	<p>'.$resultHead['descricao'].'</p>
	
	';
	
	
	//GALERIA
	$queryGaleria = "SELECT it.idgaleria_itens as idItem, gl.idgaleria as idGaleria, gl.titulo as tituloGaleria, it.titulo as tituloItem, it.arquivo as arquivo  FROM cosme.galeria_itens it
left join cosme.galeria gl on
it.galeriaid = idgaleria 
where it.galeriaid = ".$idgal." and it.st > 0 order by it.datamod desc;";
	
	$exeQueryGaleria = mysql_query($queryGaleria);
	$exeQueryGaleriaRows = mysql_num_rows($exeQueryGaleria);

	if($exeQueryGaleriaRows > 0){

		while($resultGaleria = mysql_fetch_array($exeQueryGaleria)){

			$idGaleriaItem = $resultGaleria['idItem'];
			$idGaleria = $resultGaleria['idGaleria'];
			$tituloGaleria = $resultGaleria['tituloGaleria']; 
			$tituloItem = $resultGaleria['tituloItem']; 
			$arquivo = $resultGaleria['arquivo'];
			
			echo'

	<figure class="effect-zoe">
		<img src="images/galeria/'.$tituloGaleria.'/'.$arquivo.'"/>
		<figcaption>
			<div class="text-center">
			<ul class="list-unstyled list-inline">
				<li><a href="images/galeria/'.$tituloGaleria.'/'.$arquivo.'" title="'.$tituloItem.'" data-gallery><i class="fas fa-search-plus social-btn btn-zoom"></i></a></li>
				<li>
				<div  data-href="http://cvsfotoyvideo.com/images/galeria/'.$tituloGaleria.'/'.$arquivo.'" data-size="small" data-mobile-iframe="true"><a onClick="window.open(\'https://www.facebook.com/sharer/sharer.php?u=http://cvsfotoyvideo.com/images/galeria/'.$tituloGaleria.'/'.$arquivo.'&amp;src=sdkpreparse\',\'_blank\', \'width=700,height=400\')" href="#" class="fb-xfbml-parse-ignore") title="Compartilhe no Facebook!"><i class="fab fa-facebook-square social-btn btn-face"></i></a></div>
				</li>
			</ul>
			</div>
		</figcaption>			
	</figure>
			
			';

		}

	}
	
	?>
				
</div>
				

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