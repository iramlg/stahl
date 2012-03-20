<?php include("config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Stahl Talhas | Elevação e movimentação de cargas - Downloads</title>
<META NAME="keywords" CONTENT="Fornecedora de equipamentos de movimentação de cargas, equipamentos de movimentação de cargas, equipamentos movimentação de cargas, movimentação de cargas, talha elétrica de corrente, talhas elétricas de cabo de aço, ponte rolante, ponte rolante apoiada univiga, ponte rolante apoiada dupla-viga, pontes rolantes suspensas, pontes rolantes, guindaste giratório, monovias, blocos de rodas, kit de componentes, peças sobressalentes, transporte e movimentação de carga, transporte de carga, fornecimento de componentes. ">
<META NAME="description" CONTENT="A Stahl é fornecedora de equipamentos de movimentação de cargas e apresenta qualidade reconhecida mundialmente. Os equipamentos fabricados com tecnologia de ponta são fabricados na sede da Stahl,instalada em Itapecerica da Serra (SP).">
<script language="JavaScript">
	function validaForm(){
		//validar nome
		d = document.cadastro;
		if (d.nome.value == ""){
			alert("O campo " + d.nome.name + " deve ser preenchido!");
			d.nome.focus();
			return false;
		}
		//validar Empresa
		if (d.empresa.value == ""){
			alert("O campo " + d.empresa.name + " deve ser preenchido!");
			d.user.focus();
			return false;
		}

		//validar email
		if (d.email.value == ""){
			alert("O campo " + d.email.name + " deve ser preenchido!");
			d.email.focus();
			return false;
		}
		//validar email(verificao de endereco eletronico)
		parte1 = d.email.value.indexOf("@");
		parte2 = d.email.value.indexOf(".");
		parte3 = d.email.value.length;
		if (!(parte1 >= 3 && parte2 >= 6 && parte3 >= 9)) {
			alert("O campo " + d.email.name + " deve ser conter um endereco eletronico!");
			d.email.focus();
			return false;
		}

	}
</script>



<?php include("header.php"); ?>
<div id="container">
  <div id="sidebar">
    <h3 id="titulo_downloads"></h3>
    <ul>
      <li><a href="<?= HTMLBASE; ?>/downloads/manuais.html">Manuais de Manutenção</a></li>
      <li><a href="<?= HTMLBASE; ?>/downloads/lista-pecas.html">Lista de Peças</a></li>
      <li><a href="<?= HTMLBASE; ?>/downloads/catalogos.html">Catálogos / Folders</a></li>
    </ul>
    <div id="banner"> </div>
  </div>
  <div id="bg_downloads"> </div>
  <div id="mainContent">
    <div id="img_download">
      <div id="sidebar1"> </div>
    </div>
    <div id="sidebar1"> </div>
    <div id="conteudo">
      <h2>Cadastro</h2>
        <p>Informe seu nome e email.</p>
<form name="cadastro" action="teste.php" method="post" onSubmit="return validaForm()">

         <ul>
           <li> <label> *Empresa</label></li>
           
           <li>
             <input name="empresa" type="text" />
           </li>
           
            <li><label> *Nome: </label></li>
           
              <li><input name="nome" type="text"></li>
          
              <li><label>*Email: </label></li>
           
              <li><input name="email" type="text"></li>
           
          <li id="obri"> *Campos Obrigatórios</li>
          <li id="bt_envi"><input name="enviar" type="submit" value="enviar">
</li>
    </ul>
        </form>

      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
  </div>
  <br class="clearfloat" />
</div>
</div>
<?php include("footer.php"); ?>
