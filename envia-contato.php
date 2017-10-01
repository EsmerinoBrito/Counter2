<?php
	require_once("PHPMailer/PHPMailerAutoload.php");

	session_start();
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$mensagem = $_POST["mensagem"];


	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "esmerino.neto@gmail.com";
	$mail->Password = "netojbond...2008mail@";
	$mail->setFrom("esmerino.neto@gmail.com", "Teste de envio e email");
	$mail->addAddress("esmerino.neto@gmail.com");
	$mail->Subject = "Email de contato da loja";
	$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
	$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";

	$mail->SMTPDebug = 2;
	

	if($mail->send()) {
		$_SESSION["success"] = "Mensagem enviada com sucesso";
	} else {
		$_SESSION["danger"] = "Erro ao enviar mensagem. " . $mail->ErrorInfo;
	}
	header("Location: contato.php");
	die();