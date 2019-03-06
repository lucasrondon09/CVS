<?php

$host = $_POST['host'];
$banco= $_POST['banco'];
$user = $_POST['usuario'];
$pass = $_POST['senha'];

$link = mysql_connect($host, $user, $pass);
//$link = mysql_connect('cosme.mysql.uhserver.com', 'bdcosme', 'dev@09');

if (!$link) {
    die('Nao foi possivel conectar: ' . mysql_error());
}else{
	
//$db = mysql_select_db('sesimt5');
$db = mysql_select_db($banco);
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');



if (!$db) {
    die('Nao foi encontrado o banco de dados em questao: ' . mysql_error());
}else{
	
		echo "<script>alert('Conexão realizada com sucesso!')</script>";
		//header('location:login.php');
/*	$query = "insert into conexao (host,banco,usuario,senha, st) values ('".$host."','".$banco."','".$user."','".$pass."',1)";
	$execQuery = mysql_query($query);
	
	if($query){
		
		echo ("<script>alert('Conexão realizada com sucesso!')</script>");
		header('location:login.php');
		
	}else{
		echo ("<script>alert('Não foi possível realizar a conexão!')</script>");
		header('location:login.php');
		
	}*/
}
	
	
}


echo('host: '.$host.'<br>'.'Banco: '.$banco.'<br>'.'Usuario: '.$user.'<br>'.'Senha: '.$pass)


?>