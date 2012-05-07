<?php include("config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Stahl Talhas | Elevação e movimentação de cargas - Contato</title>
<META NAME="keywords" CONTENT="Fornecedora de equipamentos de movimentação de cargas, equipamentos de movimentação de cargas, equipamentos movimentação de cargas, movimentação de cargas, talha elétrica de corrente, talhas elétricas de cabo de aço, ponte rolante, ponte rolante apoiada univiga, ponte rolante apoiada dupla-viga, pontes rolantes suspensas, pontes rolantes, guindaste giratório, monovias, blocos de rodas, kit de componentes, peças sobressalentes, transporte e movimentação de carga, transporte de carga, fornecimento de componentes. ">
<META NAME="description" CONTENT="A Stahl é fornecedora de equipamentos de movimentação de cargas e apresenta qualidade reconhecida mundialmente. Os equipamentos fabricados com tecnologia de ponta são fabricados na sede da Stahl,instalada em Itapecerica da Serra (SP).">
<script type="text/javascript"> 
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' E-mail inválido.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' \n'; }
  } if (errors) alert('Os seguintes campos devem ser preenchidos:\n'+errors);
  document.MM_returnValue = (errors == '');
}

function validateform()
{
if ((document.form1.nome.value=="")||
(document.form1.fone.value=="")||
(document.form1.email.value==""))
{
window.alert ("Por favor, preencha os campos obrigatórios (*)")
return false;
}
}
<script type="text/javascript">
	$(document).ready(function(){
		
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
		
	})	
</script>
<?php include("header.php"); ?>
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
    <h3 id="titulo_contato">Contato</h3>
    <ul>
      <li id="ativo">Contato</li>

    </ul>
    <div id="banner"> </div>
  </div>
  <div id="bg_contato">
    <h1> Contato </h1>
  </div>
  <div id="mainContent">
  <div id="img_contato">
      <div id="sidebar1"> </div>
    </div>
    <div id="sidebar1"> </div>
    <div id="conteudo">
      <h2>Fale Conosco</h2>
      <h3>Elevação e movimentação de cargas</h3>
      <!--
      <form name="form1" method="post" action="email_contato.php" onSubmit="return validateform( this.form )">
        <label><b>*</b>Nome</label>
        <input class="campos" name="nome" type="text" id="nome3">
        <label><b>*</b>Empresa</label>
        <input class="campos" name="empresa" type="text" id="empresa2">
        <label><b>*</b>Cargo</label>
        <input class="campos" name="cargo" type="text" id="cargo">
        <label><b>*</b>Email</label>
        <input class="campos" name="email" type="text" id="email">
        <label><b>*</b>Telefone</label>
        <input class="campos" name="fone" type="text" id="fone">
        <label>Mensagem</label>
        <textarea class="campos" name="mensagem" rows="5" id="mensagem"></textarea>
        <br />
        <p class="botao">
          <input  type="submit" onClick="MM_validateForm('nome3','','R','email','','RisEmail');return document.MM_returnValue" value="Enviar">
          <input type="reset" name="Submit2" value="Limpar">
        </p>
      </form>
      -->
      <h3>STAHL Talhas Equipamentos de Movimenta&ccedil;&atilde;o Ltda.</h3>
      <br />
      <p> Rod. Regis Bittencourt km 292,7</p>
      <p>Itapecerica da Serra - SP</p>
      <p>CEP 06882 - 700</p>
      <p>Fone: (11) 4147 - 7777</p>
      <p>Fax: (11) 4147 - 7779</p>
      <br />
      <?php include("lista.php"); ?>
    </div>
  </div>
  <br class="clearfloat" />
</div>
</div>
<!-- Google Code for Formul&aacute;rio Preenchido Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 980486573;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "7t1oCJu2pgMQrZPE0wM";
var google_conversion_value = 0;
if (10,00) {
 google_conversion_value = 10,00;
}
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/980486573/?value=10,00&amp;label=7t1oCJu2pgMQrZPE0wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<?php include("footer.php"); ?>
