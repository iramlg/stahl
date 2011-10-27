<?php

//Carregando base de dados
require_once ('basedados.php');

class download {

    private $email;
    private $nome;
    private $empresa;
    private $link;

    public function __construct() {
        
    }

    private function _register() {
        $con = new basedados();
        $db = $con->getConn();
        $rq = $db->prepare('INSERT INTO downloads_usuarios (empresa, nome, email) VALUES(:emp, :nome, :email)');
        $rq->bindParam(":emp", $this->empresa, PDO::PARAM_STR);
        $rq->bindParam(":nome", $this->nome, PDO::PARAM_STR);
        $rq->bindParam(":email", $this->email, PDO::PARAM_STR);

        $db->beginTransaction();

        if ($rq->execute()):
            $db->commit();
            return true;
        else:
            $db->rollBack();
            return false;
        endif;
    }

    public function setlink($link) {
        $this->link = $link;
    }

    public function getCadastro($email) {
        //Recebendo Dados
        $this->email = $email;

        //Verificando se e-mail já existe
        $con = new basedados();
        $db = $con->getConn();
        $q = $db->prepare('SELECT email, nome, empresa FROM downloads_usuarios WHERE email= :email');
        $q->bindParam(":email", $this->email, PDO::PARAM_STR);
        $q->execute();

        if ($q->rowCount() > 0):
            $result = $q->fetch(PDO::FETCH_ASSOC);
            $this->nome = $result['nome'];
            $this->empresa = $result['empresa'];
            return true;
        else:
            return false;
        endif;
    }

    public function setCadastro($email, $emp, $nome) {
        //Recebendo Dados
        $this->empresa = $emp;
        $this->nome = $nome;
        $this->email = $email;

        //Verificando se e-mail já esta cadastrado
        if (!$this->getCadastro($this->email)):
            return ($this->_register()) ? true : false;
        else:
            return true;
        endif;
    }

    public function sendMail($tipo) {
        //Montando mesnagem de envio
        $mensagem = "<html><body>";
        switch ($tipo):
            case 1: //Link para o download
                $mensagem.="Olá: " . $this->nome . "( " . $this->email . " ) <br /><br />";
                $mensagem.="Agradecemos muito o seu contato e disponibilizamos um link abaixo para download do arquivo solicitado.<br /><br />";
                $mensagem.="Links para download solicitado: (caso não funcione copie e cole no seu navegador)<br />";
                $mensagem.="http://" . $_SERVER['SERVER_NAME'] . $this->link . "<br /><br />";
                $mensagem.="Caso permaneça alguma dúvida ou queira um contato comercial estamos a inteira disposição no email vendas@stahl-talhas.com.br ou pelo telefone (11) 4147-7777. <br /><br /><br />";
                
                $mensagem.="Atenciosamente, <br /><br /><br />Equipe Stahl<br /><br /> ";
                $emailsend = $this->email;
                break;
            case 2: //Aviso do download
                $mensagem.="<strong>Download solicitado!!</strong><br /><br />";
                $mensagem.="Dados do solicitante:<br />";
                $mensagem.="Nome: <strong>" . $this->nome . "</strong><br />";
                $mensagem.="Empresa: <strong>" . $this->empresa . "</strong><br />";
                $mensagem.="E-mail: <strong>" . $this->email . "</strong><br />";
                $mensagem.="Arquivo: http://" . $_SERVER['SERVER_NAME'] . $this->link . "<br /><br />";
                $mensagem.="A pessoa foi notificada via e-mail contendo o link para o download";
                $emailsend = 'sandro@stahl-talhas.com.br';
                break;
        endswitch;
        $mensagem.="<br /><br /><strong>Obs.: Não responder este e-mail.</strong>";
        $mensagem.="</body></html>";

        //Montando o cabeçalho
        $headers = "MIME-Version: 1.1\n";
        $headers.= "Content-type: text/html; charset=UTF-8\n";
        $headers.= "From: download@stahl-talhas.com.br\n";
        $headers.= "X-Mailer: PHP/" . phpversion();

        if (mail($emailsend, 'Download Stahl-Talhas', $mensagem, $headers)):
            return true;
        else:
            return false;
        endif;
    }

}

?>