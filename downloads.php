<?php

extract($_POST);

require_once ('class.download.php');
$down = new download();
$down->setlink($link);

switch ($tipo):
    case 'check':
        if (!$down->getCadastro($email)):
            $ret = array('msg' => 'E-mail não cadastrado');
        else:
            if ($down->sendMail(1)):
                $down->sendMail(2);
                $ret = array('msg' => 'Link do download enviado para seu e-mail');
            else:
                $ret = array('msg' => 'Erro ao enviar link para e-mail - Tente novamente');
            endif;
        endif;
        break;
    case 'new':
        if (!$down->setCadastro($email, $empresa, $nome)):
            $ret = array('msg' => "Erro ao cadastrar seus dados, Tente mais tarde");
        else:
            if ($down->sendMail(1)):
                $down->sendMail(2);
                $ret = array('msg' => "Cadastro realizado com sucesso.\nFoi enviado um e-mail com o link para download.");
            else:
                $ret = array('msg' => "Cadastro realizdo com sucesso.\nPorem não foi possível enviar e-mail com link para download.");
            endif;
        endif;
        break;
endswitch;

echo json_encode($ret);
exit();

/*

session_start();

$confirm = 0;

if (!@$_POST['cmd']) {
    if (!isset($_SESSION['get_pdf'])) {
        echo json_encode(array('get_pdf' => 0));
    } else {
        echo json_encode(array('get_pdf' => 1));
    }
}

if (@$_POST['cmd'] == 'cadastro') {

// Banco de Dados
    $host = 'dbmy0005.whservidor.com';
    $usuario = 'stahltalha';
    $senha = 'lowlight';
    $banco = 'stahltalha';

    /* -------------------------------------------------------------------------------------

    $conecta = @mysql_connect($host, $usuario, $senha) or die("<b>Erro na conex?o</b> => " . mysql_error());
    $selectDb = @mysql_select_db($banco, $conecta) or die("<b>Erro ao selecionar o Banco de Dados</b> => " . mysql_error());

    /* -------------------------------------------------------------------------------------

    $empresa = $_POST['empresa'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

//Verifica se ja existe o email
    $verifica_email = mysql_query("SELECT * FROM downloads_usuarios WHERE email='{$email}'");
    $verifica_total = mysql_num_rows($verifica_email);

    if ($verifica_total == 0) {
        $query = mysql_query("INSERT INTO downloads_usuarios (empresa,nome,email) VALUES ('{$empresa}','{$nome}','{$email}')");
        $_SESSION['get_pdf'] = 1;

        if ($confirm == 0):
            header('Content-type: application/pdf');
            header('Content-Disposition: attachment; filename="downloaded.pdf"');
            readfile($_SERVER['DOCUMENT_ROOT'] . $_POST['referer']);
        else:
            $mensagem = "Olá <b>" . $nome . "</b><br /><br />";
            $mensagem .= "Você está recebendo o link para download do arquivo solicitado<br /><br />";
            $mensagem .= "http://" . $_SERVER['SERVER_NAME'] . $_POST['referer'];
            $mensagem .= "<br /><br />Obrigado!!!";

//Headers
            $headers = "Content-Type: text/html; charset=\"iso-8859-1\"\n";
            'From: ' . $email . '' . "\r\n" .
                    'Reply-To: ' . $email . '' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
            mail($email, 'Donwload em Stahl-Talhas', 'Stahl-Talhas', $mensagem, $headers);
        endif;

        $mensagem = "<b>Empresa: </b> " . $empresa . "<br />";
        $mensagem .= "<b>Nome: </b>" . $nome . "<br />";
        $mensagem .= "<b>Email: </b>" . $email . "<br />";

//Headers
        $headers = "Content-Type: text/html; charset=\"iso-8859-1\"\n";
        'From: ' . $email . '' . "\r\n" .
                'Reply-To: ' . $email . '' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

        mail('sandro@stahl-talhas.com.br', 'Download no Site: ' . $nome, $mensagem, $headers);
        exit;
    }
}
//header('Location:' . $_POST['refer']);
 
 */