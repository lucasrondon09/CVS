<?php include "conexao.php"?>
<?php include "header.php"?>
<?php include "funcoes.php"?>

<?php
$idartigos 	= $_POST['id'];
$titulo	 	= $_POST['titulo'];
$subtitulo 	= $_POST['subtitulo'];
$artigo 	= nl2br($_POST['artigo']);
$pagina 	= "artigos.php";
	
$query = "update artigos set titulo = '".$titulo."', subtitulo = '".$subtitulo."', artigo = '".$artigo."' where idartigos = ".$idartigos.";";
$execQuery = mysql_query($query);

$msg = mensagem($execQuery,$pagina);


echo $msg;

?>		  
<?php include "footer.php"?>
