<?php



$link = mysql_connect('localhost', 'root', '');
//$link = mysql_connect('cosme.mysql.uhserver.com', 'bdcosme', 'dev@09');

if (!$link) {
    die('Nao foi possivel conectar: ' . mysql_error());
}

//$db = mysql_select_db('sesimt5');
$db = mysql_select_db('cosme');
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');



if (!$db) {
    die('Nao foi encontrado o banco de dados em questao: ' . mysql_error());
}

?>