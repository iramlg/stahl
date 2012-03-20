<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro</title>
<META NAME="keywords"
	CONTENT="Fornecedora de equipamentos de movimentação de cargas, equipamentos de movimentação de cargas, equipamentos movimentação de cargas, movimentação de cargas, talha elétrica de corrente, talhas elétricas de cabo de aço, ponte rolante, ponte rolante apoiada univiga, ponte rolante apoiada dupla-viga, pontes rolantes suspensas, pontes rolantes, guindaste giratório, monovias, blocos de rodas, kit de componentes, peças sobressalentes, transporte e movimentação de carga, transporte de carga, fornecimento de componentes. ">
<META NAME="description"
		CONTENT="A Stahl é fornecedora de equipamentos de movimentação de cargas e apresenta qualidade reconhecida mundialmente. Os equipamentos fabricados com tecnologia de ponta são fabricados na sede da Stahl,instalada em Itapecerica da Serra (SP).">
<link href="style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript">
	function validaForm(){
		d = document.cadastro;
		if(d.nome.value == "" || d.empresa.value == "" || d.email.value == ""){
			alert("Todos os campos são obrigatórios.");
		}else{
			d.submit();
		}

	}
</script>

<!--[if IE 5]>
<style type="text/css"> 
.stahl #sidebar { width: 230px; }
</style>
<![endif]-->
<!--[if IE]>
<style type="text/css"> 
.stahl #sidebar { padding-top: 30px; }
.stahl #mainContent { zoom: 1; }
</style>
<![endif]-->

</head>
<body style="background:none;padding:10px; font-family:Arial, Helvetica, sans-serif; size:12px;">
<div id="conteudo">
  <h2>Cadastro</h2>
<br />
<br />
<br />
  <form name="cadastro" action="downloads_script.php" method="post">
	    
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="57" align="left">*Empresa</td>
      <td width="236"><input name="empresa" class="empresa" type="text" /></td>
    </tr>
    <tr>
      <td align="left">*Nome</td>
      <td><input name="nome" class="nome" type="text"></td>
    </tr>
    <tr>
      <td align="left">*Email</td>
      <td><input name="email" class="email" type="text"></td>
    </tr>
    <tr>
      <td align="left">&nbsp;</td>
      <td><input type="button" value="Enviar" onclick="validaForm();" /> <input name="cmd" type="hidden" value="cadastro" /> 
      <input name="referer" type="hidden" value="<?php echo $_GET['url']; ?>" /></td>
    </tr>
  </table>
  </form>
</div>
</body>
</html>
