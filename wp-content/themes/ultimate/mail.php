<?php

	$nome = $_GET['nome'];
	$email = $_GET['email'];
	$telefone = $_GET['telefone'];
	$assunto = $_GET['assunto'];
	$email = $_GET['email'];
	$mensagem = $_GET['mensagem'];

	$nome_site = $_GET['nome_site'];
	$para = $_GET['para'];

	$email_remetente = $para;

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: $nome_site <$email_remetente>\n";
	$headers .= "Return-Path: $nome_site <$email_remetente>\n";
	$headers .= "Reply-To: $nome <$email>\n";

	if($assunto == ''){
		$assunto_email = 'Atendimento, Fale Conosco';
		$conteudo = '
		<h2>Olá, uma nova mensagem foi enviada através do site.</h2>
		<p>Confira logo abaixo, todos os dados preenchidos no formulário da área "Contato":</p>';

		$conteudo .= '<p>';
		$conteudo .= '<strong>Nome:</strong> '.$nome;
		$conteudo .= '<br><strong>E-mail:</strong> '.$email;
		$conteudo .= '<br><strong>Telefone:</strong> '.$telefone;
		$conteudo .= '<br><strong>Mensagem:</strong> '.$mensagem;
		$conteudo .= '</p>';
	}else{
		$assunto_email = 'Atendimento, Orçamento';
		$conteudo = '
		<h2>Olá, um novo orçamento foi enviado através do site.</h2>
		<p>Confira logo abaixo, todos os dados preenchidos no formulário:</p>';

		$conteudo .= '<p>';
		$conteudo .= '<strong>Nome:</strong> '.$nome;
		$conteudo .= '<br><strong>E-mail:</strong> '.$email;
		$conteudo .= '<br><strong>Telefone:</strong> '.$telefone;
		$conteudo .= '<br><strong>'.$assunto.'</strong>';
		$conteudo .= '<br><strong>Mensagem:</strong> '.$mensagem;
		$conteudo .= '</p>';
	}

	if(mail($para, $assunto_email, $conteudo, $headers, "-f$email_remetente")){
		mail('edertton@gmail.com', "Contato, Fale Conosco", $conteudo, $headers, "-f$email_remetente");
		echo(json_encode('ok'));
	}else{
		echo(json_encode("Desculpe, não foi possível enviar seu formulário. <br>Por favor, tente novamente mais tarde."));
	}
?>