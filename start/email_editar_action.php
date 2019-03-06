<?php include "conexao.php"?>
<?php include "header.php"?>
<?php include "funcoes.php"?>

<?php
	$idemail			= $_POST['idemail'];
	$host 				= $_POST['host'];
	$porta	 			= $_POST['porta'];
	$login 				= $_POST['login'];
	$senha 				= $_POST['senha'];
	$nomeremetente 		= $_POST['nomeremetente'];
	$emailremetente 	= $_POST['emailremetente'];
	$destinatario1 		= $_POST['destinatario1'];
	$destinatario2 		= $_POST['destinatario2'];
	$destinatariocc 	= $_POST['destinatariocc'];
	$destinatariocco 	= $_POST['destinatariocco'];
	$pagina 			= "email.php";
	
$query = "update email set host = '".$host."', porta = '".$porta."', login = '".$login."', 
senha = '".$senha."', nomeremetente = '".$nomeremetente."', emailremetente = '".$emailremetente."', 
destinatario1 = '".$destinatario1."', destinatario2 = '".$destinatario2."', destinatariocc = '".$destinatariocc."',
destinatariocco = '".$destinatariocco."' where idemail = ".$idemail.";";
$execQuery = mysql_query($query);

$msg = mensagem($execQuery,$pagina);

echo $msg;

?>		  
<?php include "footer.php"?>
