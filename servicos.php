<?php include("config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Stahl Talhas | Elevação e movimentação de cargas - Serviços</title>
<META NAME="keywords" CONTENT="Fornecedora de equipamentos de movimentação de cargas, equipamentos de movimentação de cargas, equipamentos movimentação de cargas, movimentação de cargas, talha elétrica de corrente, talhas elétricas de cabo de aço, ponte rolante, ponte rolante apoiada univiga, ponte rolante apoiada dupla-viga, pontes rolantes suspensas, pontes rolantes, guindaste giratório, monovias, blocos de rodas, kit de componentes, peças sobressalentes, transporte e movimentação de carga, transporte de carga, fornecimento de componentes. ">
<META NAME="description" CONTENT="A Stahl é fornecedora de equipamentos de movimentação de cargas e apresenta qualidade reconhecida mundialmente. Os equipamentos fabricados com tecnologia de ponta são fabricados na sede da Stahl,instalada em Itapecerica da Serra (SP).">


<?php include("header.php"); ?>
<script type="text/javascript" src="<?= HTMLBASE; ?>/jquery.bgpos.js"></script>
<script type="text/javascript" src="<?= HTMLBASE; ?>/jquery.cycle.lite.1.0.min.js"></script>
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
	  <div id="mailing" class="contact">
    <div class='moonray_forms moonray_smart_form'>
        <form action="https://forms.moon-ray.com/v2.4/form_processor.php?" class="moonray_teste" id="moonray_forms_998" method="post" data-captcha="false">
        <input type="hidden" name="uid" value="p2c6219f7" />
        <input type="hidden" name="contact_id" id="contact_id_998" value="" />

        <input type="hidden" id="afft_998" name="afft_" value="" />
        <input type="hidden" id="aff_998" name="aff_" value="" />
        <input type="hidden" id="sess_998" name="sess_" value="" />
        <input type="hidden" id="ref_998" name="ref_" value="" />
        <input type="hidden" id="own_998" name="own_" value="" />
        <input type="hidden" name="smartform" value="1">
        <fieldset  class="moonray_form_format_labels_on_top">
        <!-- EDITABLE PARTS BELOW -->
        <div class="moonray_form_field_wrapper">
            <label class="moonray_fieldname mr_firstname" for="firstname">Nome<span class="moonray_required">*</span></label>
            <input type="text" name="firstname" value="" class="moonray_input required text" size="30"/></div><div class="moonray_form_field_wrapper">
            <label class="moonray_fieldname mr_email" for="email">E-Mail<span class="moonray_required">*</span></label>
            <input type="text" name="email" value="" class="moonray_input required text" size="30"/></div><div class="moonray_form_field_wrapper">
            <label class="moonray_fieldname mr_notes" for="notes">Observação<span class="moonray_required">*</span></label>
            <textarea name="notes"  rows="4" class="moonray_input required"></textarea>
        </div>

        </fieldset>
        <input type="submit" value="Enviar">
        <!-- EDITABLE ENDS (DO NOT EDIT CONTENTS BELOW)-->
        </form>

        <link rel="stylesheet" type="text/css" href="https://forms.moon-ray.com/v2.4/include/minify/?g=moonrayCSS">
        <script type="text/javascript" src="https://forms.moon-ray.com/v2.4/include/minify/?g=moonrayJS"></script>
        <script type="text/javascript" src="https://forms.moon-ray.com/v2.4/include/scripts/moonrayJS/smartform_loader.js?rand=998"></script>
    </div>
  </div>
  <div id="sidebar">
   <h3 id="titulo_servicos">Empresa</h3>
      <ul>
      <li id="ativo">Serviços</li>

    </ul>
   </div>
  <div id="bg_servicos"> </div>
  <div id="mainContent">
    <div id="sidebar1"> 
    <img src="images/Detalhe_servicos_1.jpg" alt="Foto de detalhe de Servi&ccedil;os" width="100" height="100"> 
    <img src="images/Detalhe_servicos_2.jpg" alt="Foto de detalhe de Servi&ccedil;os" width="100" height="100"> 
    <img src="images/Detalhe_servicos_3.jpg" alt="Foto de detalhe de Servi&ccedil;os" width="100" height="100"> </div>
    <div id="conteudo">
      <h2>Serviços</h2>
      <h3>Técnicos de equipamentos de elevação qualificados</h3>
      <p>A STAHL presta serviços de manutenção corretiva e preventiva, montagens e assistência técnica, reformas e consertos em equipamentos de movimentação e elevação de cargas.</p>
      <div style="height:260px;">
        <div id="slideshow1"> 
        <img src="img/image4a.jpg" alt="equipamentos eleva&ccedil;&atilde;o" width="360" height="250"/> 
        <img src="img/image5a.jpg" alt="equipamentos eleva&ccedil;&atilde;o" width="360" height="250" /> 
        <img src="img/image6.jpg" alt="equipamentos eleva&ccedil;&atilde;o" width="360" height="250" /> </div>
      </div>
      <p>Equipes de técnicos qualificados e estoques de peças sobressalentes originais garantem a qualidade de sua assistência técnica.</p>
      <p><strong>Contrato de Manutençao Preventiva</strong></p>
      <p>A <a href="index.htm"><strong>STAHL</strong></a> busca sempre o melhor para atender seus clientes e garantir maior vida útil de seus equipamentos. Para isso, mantém uma equipe especializada e preparada para visitar periódicamente sua empresa.</p>
      <p><a href="downloads.html">Faça o download do catálogo de peças</a></p>

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
