<?php

include("start/conexao.php");


//TEXTOS
$queryArtigo = "SELECT `titulo`, `subtitulo`, `artigo`,'posicao' FROM `artigos` where st > 0 order by idartigos";
$exeQueryArtigo = mysql_query($queryArtigo);
$exeQueryArtigoRows = mysql_num_rows($exeQueryArtigo);

if($exeQueryArtigoRows > 0){

	while($resultArt = mysql_fetch_array($exeQueryArtigo)){

		$resArtigo[] = array($resultArt['titulo'],$resultArt['subtitulo'], $resultArt['artigo']);

	}

}


//IMAGENS
$queryImagem = "SELECT * FROM `imagens` where st > 0 order by idimagens";
$exeQueryImagem = mysql_query($queryImagem);
$exeQueryImagemRows = mysql_num_rows($exeQueryImagem);

if($exeQueryImagemRows > 0){

	while($resultImg = mysql_fetch_array($exeQueryImagem)){

		$resImagem[] = array($resultImg['idimagens'],$resultImg['arquivo']);

	}

}


//LINKS
$queryLink = "SELECT * FROM `links` where st > 0 order by idlink";
$exeQueryLink = mysql_query($queryLink);
$exeQueryLinkRows = mysql_num_rows($exeQueryLink);

if($exeQueryLinkRows > 0){

	while($resultLink = mysql_fetch_array($exeQueryLink)){

		$resLink[] = array($resultLink['idlink'],$resultLink['titulo'], $resultLink['link']);

	}

}


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
              <a class="navbar-brand" href="#home"><img src="images/<?php echo $resImagem[8][1];?>" alt="logo"></a>
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
                 <li class="active"><a href="<?php echo $resLink[0][2];?>"><?php echo $resLink[0][1];?></a></li>
                 <li ><a href="<?php echo $resLink[1][2];?>"><?php echo $resLink[1][1];?></a></li>
                 <li ><a href="<?php echo $resLink[2][2];?>"><?php echo $resLink[2][1];?></a></li>
                 <li ><a href="<?php echo $resLink[3][2];?>"><?php echo $resLink[3][1];?></a></li>
				 <li ><a href="<?php echo $resLink[4][2];?>"><?php echo $resLink[4][1];?></a></li> 
                 <li ><a href="<?php echo $resLink[5][2];?>"><?php echo $resLink[5][1];?></a></li>
				 <li ><a href="<?php echo $resLink[6][2];?>" class="btn btn-warning btn-lg active btn-txt" role="button" aria-pressed="true"><i class="fa fa-lock"></i> <?php echo $resLink[6][1];?></a></li>
              </ul>
            </div>
            <!-- #Navbar -->

          </div>
        </div>

      </div>
    </div>
<!-- #Cabecalho -->

<div id="home">
<!-- Slides -->
<div id="myCarousel" class="carousel slide banner-slider animated bounceInDown" data-ride="carousel">     
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active">
          <img src="images/<?php echo $resImagem[0][1];?>" alt="banner">
        </div>
        <!-- #Item 1 -->

        <!-- Item 2 -->
        <div class="item">
          <img src="images/<?php echo $resImagem[1][1];?>" alt="banner">
        </div>
        <!-- #Item 2 -->

        <!-- Item 3 -->
        <div class="item">
          <img src="images/<?php echo $resImagem[2][1];?>" alt="banner">
        </div>
        <!-- #Item 3 -->

        <!-- Item 4 -->
        <div class="item">
          <img src="images/<?php echo $resImagem[3][1];?>" alt="banner">
        </div>
        <!-- #Item 4 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon-chevron-left"><i class="fa fa-angle-left"></i></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon-chevron-right"><i class="fa fa-angle-right"></i></span></a>
    </div>
<!-- #Slides -->
</div>









<!-- Sobre -->
<div id="sobre"  class="container spacer about">
<h2 class="text-center wowload fadeInUp"><?php echo $resArtigo[0][0];?></h2>  
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4><i class="fa fa-camera-retro"></i> <?php echo $resArtigo[1][0];?> </h4>
    <p><?php echo $resArtigo[1][2];?></p>
    

  </div>
  <div class="col-sm-6 wowload fadeInRight">
  <h4><i class="fa fa-coffee"></i> <?php echo $resArtigo[2][0];?></h4>
  <p><?php echo $resArtigo[2][2];?></p>    
  </div>
  </div>

  <div class="services">
  <h3 class="text-center wowload fadeInUp"><?php echo $resArtigo[3][0];?></h3>
	<ul class="row text-center list-inline  wowload bounceInUp">
   		<li>
            <span><i class="fas fa-camera"></i><b><?php echo $resArtigo[4][0];?></b></span>
        </li>
        <li>
            <span><i class="fas fa-heart"></i><b><?php echo $resArtigo[5][0];?></b></span>
        </li>
        <li>
            <span><i class="fas fa-female"></i><b><?php echo $resArtigo[6][0];?></b></span>
        </li>
        <li>
            <span><i class="fas fa-user-tie"></i><b><?php echo $resArtigo[7][0];?></b></span>
        </li>        
        <li>
            <span><i class="fas fa-video"></i><b><?php echo $resArtigo[8][0];?></b></span>
        </li>
  	</ul>
  </div>
	
  <div class="midias">
  <h4 class="text-center wowload fadeInUp"><?php echo $resArtigo[9][0];?></h4>
	<ul class="row text-center list-inline  wowload bounceInUp">
        <li>
            <a href="<?php echo $resLink[7][2];?>" target="_blank"><i class="fab fa-facebook fa-4x face"></i></a>
        </li>
        <li>
            <a href="<?php echo $resLink[8][2];?>" target="_blank"><i class="fab fa-instagram fa-4x insta"></i></a>
        </li>
        <li>
            <a href="<?php echo $resLink[9][2];?>" target="_blank"><i class="fab fa-pinterest fa-4x pint"></i></a>
        </li>        
  	</ul>
  </div>
</div>
<!-- Sobre -->


<!-- Portfolio -->
<div id="portfolio"  class=" clearfix grid"> 
	
	<?php 
	
	//GALERIA
	$queryGaleria = "SELECT * FROM `galeria` where st > 0 order by idgaleria";
	$exeQueryGaleria = mysql_query($queryGaleria);
	$exeQueryGaleriaRows = mysql_num_rows($exeQueryGaleria);

	if($exeQueryGaleriaRows > 0){

		while($resultGaleria = mysql_fetch_array($exeQueryGaleria)){

			$idGaleria = $resultGaleria['idgaleria'];
			$titulo = $resultGaleria['titulo']; 
			$descricao = $resultGaleria['descricao'];
			$capa = $resultGaleria['capa'];
			
			echo'
			
			<figure class="effect-oscar  wowload fadeInUp">
				<img src="images/galeria/'.$titulo.'/'.$capa.'"/>
				<figcaption>
					<h2>'.$titulo.'</h2>
					<p>'.$descricao.'<br>
					<a href="galeria.php?idgaleria='.$idGaleria.'">Veja mais</a></p>  
				</figcaption>
			</figure>
			
			';

		}

	}
	
	
	?>
       
</div>
<!-- Portfolio -->

<!-- Depoimentos -->
<div id="depoimentos" class="container spacer ">
	<h2 class="text-center  wowload fadeInUp"><?php echo $resArtigo[10][0];?></h2>
  <div class="clearfix">
    <div class="col-sm-6 partners  wowload fadeInLeft">
         <div class="fb-comments" data-href="<?php echo $resLink[10][2];?>" data-numposts="5"></div>
    </div>
    <div class="col-sm-6">


    <div id="carousel-testimonials" class="carousel slide testimonails  wowload fadeInRight" data-ride="carousel">
    <div class="carousel-inner">  
      <div class="item active animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/<?php echo $resImagem[4][1];?>" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p><?php echo $resArtigo[11][2];?></p>      
      <span><?php echo $resArtigo[11][0];?></b></span>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/<?php echo $resImagem[5][1];?>" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p><?php echo $resArtigo[12][2];?></p>
      <span><?php echo $resArtigo[12][0];?></span>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft  col-xs-2"><img alt="portfolio" src="images/<?php echo $resImagem[6][1];?>" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p><?php echo $resArtigo[13][2];?></p>
      <span><?php echo $resArtigo[13][0];?></span>
      </div>
      </div>
  </div>
		

   
   	<ol class="carousel-indicators">
    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
  	</ol>
  	
  </div>
    </div>
  </div>

</div>

<!-- Depoimentos -->






<div id="projetos">
<!-- Projetos -->
<div class="highlight-info">
<div class="overlay spacer">
<div class="container">
<div class="row text-center  wowload fadeInDownBig">
	<div class="col-md-12">
	<i class="fas fa-hand-holding-heart fa-5x"></i><h3><?php echo $resArtigo[14][0];?></h3>
	</div>
	<p><?php echo $resArtigo[14][2];?> 	
	</p>
	<a href="<?php echo $resLink[12][2];?>" class="btn btn-default pu" target="_blank">Saiba mais</a>
	
</div>
</div>
</div>
</div>
<!-- Projetos -->
</div>

<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-d5b572c6-100d-43ba-ad3f-a63297428142"></div>





<div id="contatos" class="spacer">
<!--Contatos-->
<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp"><?php echo $resArtigo[15][0];?></h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">  
		<form id="email" method="post" action="envia_email.php" enctype="multipart/form-data">

				<input id="nome" name="nome" type="text" placeholder="Nome" required="required" data-validation-required-message="Por favor, insira seu Nome.">


				<input  id="email" name="email" type="mail" placeholder="E-mail" required="required" data-validation-required-message="Por favor, insira seu E-mail.">


				<input  id="fone" name="fone" type="text" placeholder="Telefone" required="required" data-validation-required-message="Por favor, insira seu Telefone.">


				<textarea rows="5"  id="mensagem" name="mensagem" placeholder="Mensagem" required="required" data-validation-required-message="Por favor, insira sua mensagem."></textarea>

			<button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase btn-block" type="submit"><i class="fa fa-paper-plane"></i> Enviar Mensagem</button>
		</form>  
      </div>
  </div>



</div>
</div>
<!--Contatos-->



<!-- Rodape -->
<div class="footer text-center spacer">
<p class="wowload flipInX">
	<a href="<?php echo $resLink[7][2];?>" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
	<a href="<?php echo $resLink[8][2];?>" target="_blank"><i class="fa fa-instagram fa-2x"></i></a> 
	<a href="<?php echo $resLink[9][2];?>" target="_blank"><i class="fab fa-pinterest fa-2x pint"></i></a>
	<a href="<?php echo $resLink[11][2];?>" target="_blank"><i class="fab fa-2x fa-whatsapp"></i></a>
</p>
<p><?php echo $resArtigo[16][0];?></p>
<p><a href="lucasrondon.com.br" target="_blank"><i class="fas fa-code fa-1x"></i></i> <strong>DESENVOLVEDOR WEB</strong></a></p>	
</div>
<!-- Rodape -->
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