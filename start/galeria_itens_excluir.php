<?php

include "conexao.php";
include "header.php";
include "funcoes.php";

$idgaleria = $_GET['idItem'];

$query = "UPDATE `galeria_itens` SET `st`= 0 WHERE `idgaleria_itens` =".$idgaleria;
$execQuery = mysql_query($query);

if($execQuery){
	
	echo "<script>javascript:history.back()</script>";
	
}else{
	echo "<script>alert('Não foi possível excluir o registro, verifique!');</script>";
	echo "<script>javascript:history.back()</script>";
	

}




?>