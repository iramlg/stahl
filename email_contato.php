<?php
/**
 * Envia o Email de Contato
 * @author Jarbas
 */

if(isset($_POST)){
	//Campos
	$nome = $_POST['nome'];
	$empresa = $_POST['empresa'];
	$cargo = $_POST['cargo'];
	$email = $_POST['email'];
	$fone = $_POST['fone'];

	$mensagem  = "<b>Nome: </b>" . $nome ."<br />";
	$mensagem .= "<b>Empresa: </b> " . $empresa."<br />";
	$mensagem .= "<b>Cargo: </b>" . $cargo."<br />";
	$mensagem .= "<b>Email: </b>" . $email."<br />";
	$mensagem .= "<b>Telefone: </b>" . $fone."<br />";
	$mensagem .= "<b>MENSAGEM</b> <br /><br />";
	$mensagem .= $_POST['mensagem'];

	//Headers
	$headers =  "Content-Type: text/html; charset=\"iso-8859-1\"\n";
				'From: '.$email.'' . "\r\n" .
    			'Reply-To: '.$email.'' . "\r\n" .
    			'X-Mailer: PHP/' . phpversion();

	if(mail('vendas@stahl-talhas.com.br', 'Contato do Site: '.$nome, $mensagem, $headers)){
		echo "<script type='text/javascript'>";
		echo "alert('Email enviado com Sucesso.');";
		echo "location.href="./"";
		echo "</script>";
	}

}