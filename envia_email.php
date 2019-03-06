<?php
include('start/conexao.php');

$query = "select * from email";
$execQuery = mysql_query($query);
$rowsQuery = mysql_num_rows($execQuery);

if($rowsQuery > 0){
	
	$res = mysql_fetch_array($execQuery);
	$host 				= $res['host'];
	$porta	 			= $res['porta'];
	$login 				= $res['login'];
	$senha 				= $res['senha'];
	$nomeremetente 		= $res['nomeremetente'];
	$emailremetente 	= $res['emailremetente'];
	$destinatario1 		= $res['destinatario1'];
	$destinatario2 		= $res['destinatario2'];
	$destinatariocc 	= $res['destinatariocc'];
	$destinatariocco 	= $res['destinatariocco'];
		
	
}


// Adiciona o arquivo class.phpmailer.php - você deve especificar corretamente o caminho da pasta com o este arquivo.
require_once("mail/PHPMailerAutoload.php");
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve auterar conforme o seu domínio!
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = $host; // Seu endereço de host SMTP
$mail->SMTPAuth = true; // Define que será utilizada a autenticação -  Mantenha o valor "true"
$mail->Port = $porta; // Porta de comunicação SMTP - Mantenha o valor "587"
$mail->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
$mail->SMTPAutoTLS = false; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
$mail->Username = $login ; // Conta de email existente e ativa em seu domínio
$mail->Password = $senha; // Senha da sua conta de email
 
// DADOS DO REMETENTE
$mail->Sender = $emailremetente; // Conta de email existente e ativa em seu domínio
$mail->From = $emailremetente; // Sua conta de email que será remetente da mensagem
$mail->FromName = $nomeremetente; // Nome da conta de email
 
// DADOS DO DESTINATÁRIO
$mail->AddAddress($destinatario1); // Define qual conta de email receberá a mensagem
$mail->AddAddress($destinatario2); // Define qual conta de email receberá a mensagem
$mail->AddCC($destinatariocc); // Define qual conta de email receberá uma cópia
$mail->AddBCC($destinatariocco); // Define qual conta de email receberá uma cópia oculta
 
// Definição de HTML/codificação
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
 
// DEFINIÇÃO DA MENSAGEM
$mail->Subject  = "Formulário de Contato"; // Assunto da mensagem
$mail->Body .= " Nome: ".$_POST['nome']."<br>"; // Texto da mensagem
$mail->Body .= " E-mail: ".$_POST['email']."<br>"; // Texto da mensagem
$mail->Body .= " Telefone: ".$_POST['fone']."<br>"; // Texto da mensagem
$mail->Body .= " Mensagem: ".nl2br($_POST['mensagem'])."<br>"; // Texto da mensagem
 
// ENVIO DO EMAIL
$enviado = $mail->Send();
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
 
// Exibe uma mensagem de resultado do envio (sucesso/erro)
if ($enviado) {
  echo "<script language='javascript'>alert('Mensagem enviada com sucesso!')</script>";
  $msg_ok = "<script language='javascript'>location.href='index.php';</script>";
  echo $msg_ok;	
	
} else {
  echo "<script language='javascript'>alert('Não foi possível enviar o e-mail, tente novamente!')</script>";
  $voltar = "<script>javascript:history.back(-2)</script>";
  echo $voltar;

}