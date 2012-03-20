<?php include("config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<title>Stahl Talhas | Elevação e movimentação de cargas - Produtos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<META NAME="keywords" CONTENT="Stahl, produtos e componentes para elevação e movimentação de materiais, produtos e componentes, elevação de materiais, movimentação de materiais, base para soluções de sistemas de produção, base para sistemas de produção, componentes personalizados, aplicações individualizadas, aplicações, consultoria especializada, entrega programada, montagem, pós-venda, produtos stahl, talha elétrica de corrente, Talhas elétricas de cabo de aço, Ponte rolante apoiada univiga, Ponte rolante apoiada dupla-viga, Pontes rolantes suspensas">
<META NAME="description" CONTENT="A STAHL oferece um completo programa de produtos e componentes para elevação e movimentação de materiais. Eles formam a base para soluções de sistemas de produção e estão entre os melhores produtos para elevação e movimentação de materiais do mundo.">
<?php include("header.php"); ?>
<script type="text/javascript" src="jquery.bgpos.js"></script>
<script type="text/javascript" src="jquery.cycle.lite.1.0.min.js"></script>
<script type="text/javascript"> 



$(function() {

    $('#slideshow1').cycle();
    
    $("#btn_form_padrao").click(function(){
			
			var preenchidos = 1;
			
			$("input,textarea").each(function(){
				
				if($(this).val() == ""){ preenchidos = 0; }
				
			})
			
			if(preenchidos == 1)
			{
				var filter = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;

				if(!filter.test($("#email").val()))
				{
					alert("Email inválido.");
				}
				else
				{
					$("#form_padrao").submit();
				}
			}
			else
			{
				alert("Todos os campos são obrigatórios.");
			}
			
	})


    
});

</script>

<div id="container">
  <div id="mailing">
  	<form name="form_padrao" id="form_padrao" method="post" action="envia_contato_padrao.php">
  		<h2>Fale com a STAHL</h2>
  		<label>
  			<span class="label">Nome:</span>
  			<input class="inputText" type="text" name="nome" id="nome" size="20" value="" />
  		</label>
  		<label>
  			<span class="label">E-mail:</span>
			<input class="inputText" type="text" name="email" id="email" size="20" value="" />
  		</label>
  		<label>
  			<span>Observação:</span>
  			<textarea class="inputText"  rows="3" type="text" name="obs" id="obs" cols="20"></textarea>
  		</label>
  		<br />
  		<p><input name="btn_form_padrao" id="btn_form_padrao" type="button" class="botao2" value="Enviar" /></p>
  	</form>
  </div>
  <div id="bt_certificados"> <a href="#" onClick="window.open('produtos/cert_iso_1.php', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=770, HEIGHT=600');"><img src="images/iso_1_p.jpg" alt="" width="149" height="224" style="cursor:pointer; cursor:hand;" border="0"></a>
    <p>Certificado ISO 9001</p>
    <p>&nbsp;</p>
    <!--<a href="produtos/novidades.html" target="_blank"><img src="images/novidades_foto1.jpg" width="150" height="115" border="0"></a>
    <p>&nbsp; </p>
    <p><strong><a href="produtos/novidades.html">Clique aqui e conheça algumas novidades da STAHL.</a></strong></p>-->
  </div>
  
  <div id="sidebar">
    <h3 id="titulo_produtos">Produtos</h3>
    <ul>
      <li id="ativo">Apresentação</li>
      <li><a href="produtos/pontes-rolantes.php">Pontes Rolantes</a></li>
      <li><a href="produtos/talha-eletrica-corrente.php">Talhas Elétricas de Corrente</a></li>
      <li><a href="produtos/talha-eletrica-caboaco.php">Talhas Elétricas de Cabo de Aço</a></li>
      <li><a href="produtos/guindaste-giratorio.php">Guindastes Giratórios</a></li>
      <li><a href="produtos/monovias.php">Monovias</a></li>
      <li><a href="produtos/bloco-de-rodas.php">Blocos de Roda</a></li>
      <li><a href="produtos/acessorios.php">Acessórios</a></li>
      <li><a href="produtos/pecas.php">Peças</a></li>
      <li><a href="produtos/a-prova-de-explosao.php">À Prova de Explosão <img src="img/ex.png" width="17px" height="15px" border=none></a></li>
    </ul>
    <div id="banner"> </div>
  </div>
  <div id="bg_produtos">
    <h1 class="h1">Apresentação</h1>
  </div>
  <div id="mainContent">
    <div id="sidebar1">
      <p><img src="images/Detalhe_ponte_2.jpg" alt="Detalhe Ponte Rolante" width="100" height="100"></p>
      <p><img src="images/Detalhe_corrente_3.jpg" alt="Detalhe de Talha de Corrente" width="100" height="102"></p>
      <p><img src="images/Detalhe_cabo_2.jpg" alt="Detalhe de Talha de Cabo de A&ccedil;o" width="100" height="100"></p>
    </div>
    <div id="conteudo">
      <h2>Produtos e componentes</h2>
      <div style="height:260px;">
        <div id="slideshow1"> 
        <img src="img/image1.jpg" alt="Guindaste girat&oacute;rio" width="360" height="250" /> 
        <img src="img/image2.jpg" alt="Talha el&eacute;trica de corrente" width="360" height="250" /> 
        <img src="img/image3.jpg" alt="Ponte rolante apoiada " width="360" height="250" /> </div>
      </div>
      <p>A<a href="index.htm"><strong> STAHL</strong></a> oferece um completo programa de<strong> produtos e componentes</strong> para elevação e<strong> movimentação de materiais</strong>. <strong>Opcionalmente personalizados</strong> para <strong>aplicações individualizadas</strong>, eles formam a<strong> base para soluções de sistemas de produção</strong> e estão entre os melhores produtos para elevação e movimentação de materiais do mundo. Nós asseguramos o sucesso nas aplicações através de <strong><a href="servicos.htm">consultoria especializada</a></strong>, desenvolvimento inovador, produção direcionada à qualidade, entrega programada, montagem e <a href="servicos.php">pós-venda</a>. </p>
      <p align="center"> <img src="images/selo_topfive.gif" alt="Talhas el&eacute;tricas de cabo de a&ccedil;o" width="200" height="200" border="0"></p>
      <?php include("lista.php"); ?>
    </div>
  </div>
  <br class="clearfloat" />
</div>
</div>
<div id="footer">
  <div id="footer2"></div>
</div>
</body>
</html>