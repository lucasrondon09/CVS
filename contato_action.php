<?php
include 'funcoes.php';
include("includes/class.phpmailer.php"); 	

$nome				= $_POST["nome"];
$fone				= $_POST["fone"];
$mensagem			= $_POST["mensagem"];
$data_msg	= date("d/m/y");
$remetente = "andreia.lima@sesimt.com.br";




		
//define o template e substitui as variaveis
$conteudo = file_get_contents("form_contato_index.html");

$conteudo = str_replace("%%NOME%%",utf8_decode($nome),$conteudo);
$conteudo = str_replace("%%FONE%%",utf8_decode($fone),$conteudo);
$conteudo = str_replace("%%MENSAGEM%%",utf8_decode($mensagem),$conteudo);
$conteudo = str_replace("%%DATA_MSG%%",utf8_decode($data_msg),$conteudo);

$assunto = utf8_decode("CVS Foto e Video - Formulário");
	


$Email = new PHPMailer();

$Email->IsSMTP(); 
$Email->Mailer = "smtp"; 

//inclui a autenticacao SMTP
$Email->SMTPAuth = true;
$Email->SMTP_PORT = $remetente_padrao_contato_porta;
$Email->Port = $remetente_padrao_contato_porta;
$Email->Host = $remetente_padrao_contato_host;
$Email->Helo = $remetente_padrao_contato_helo;
$Email->Username = $remetente_padrao_contato_usuario;
$Email->Password = $remetente_padrao_contato_senha;

// na classe, há a opção de idioma, setei como br
$Email->SetLanguage("br");

// ativa o envio de e-mails em HTML, se false, desativa.
$Email->IsHTML(true); 
// email do remetente da mensagem
$Email->From = "formularios@fiemt.com.br";
// nome do remetente do email
$Email->FromName = utf8_decode($_POST['nome']);
// nome do Sender (return-path) do email
$Email->Sender = "formularios@fiemt.com.br";
// Endereço de destino do emaail, ou seja, pra onde você quer que a mensagem do formulário vá?
//$Email->AddAddress(trim("web.uepe@fiemt.com.br"));
$Email->AddAddress(trim($remetente));
$Email->AddCC($remetente2);
$Email->AddBCC($remetente3);	
//$Email->AddAddress(trim($ins_polo));
//$Email->AddAddress(trim($remetente));		
// informando no email, o endereco para resposta
$Email->AddReplyTo($remetente);
// informando no email, o assunto da mensagem											
$Email->Subject = $assunto;
//corpo da mensagem
$Email->Body .= $conteudo;			

$alerta = "<script language='javascript'>alert('Mensagem enviada com sucesso!')</script>";
// verifica se está tudo ok com oa parametros acima, se nao, avisa do erro. Se sim, envia.
if($Email->Send()){
	echo $alerta;
	$msg_ok = "<script language='javascript'>location.href='index.php';</script>";
	echo $msg_ok;
}else{
	echo "<p align='center'><strong>Erro no cadastro: ".$Email->ErrorInfo."</strong></p>";

	}




?>



















