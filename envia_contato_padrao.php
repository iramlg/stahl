<?php
/**
 * Envia o Email de Contato
 * @author Jarbas
 */

if(isset($_POST)){
	//Campos
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	
	$mensagem  = "<b>Nome: </b>" . $nome ."<br />";
	$mensagem .= "<b>Email: </b>" . $email."<br />";
	$mensagem .= "<b>OBSERVAÇÃO</b> <br /><br />";
	$mensagem .= $_POST['obs'];

	//Headers
	$headers =  "Content-Type: text/html; charset=\"utf-8\"\n";
				'From: '.$email.'' . "\r\n" .
    			'Reply-To: '.$email.'' . "\r\n" .
    			'X-Mailer: PHP/' . phpversion();

	if(mail('sandro@stahl-talhas.com.br', ''.utf8_decode('Formulário').' do Site: '.$nome, $mensagem, $headers)){
	?>
		<script type='text/javascript'>
			alert('Email enviado com Sucesso.');
			location.href="./"
		</script>
	<?php
	}

}