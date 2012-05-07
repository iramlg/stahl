<?php include("../config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Stahl Talhas | Elevação e movimentação de cargas - Downloads</title>
<META NAME="keywords" CONTENT="Fornecedora de equipamentos de movimentação de cargas, equipamentos de movimentação de cargas, equipamentos movimentação de cargas, movimentação de cargas, talha elétrica de corrente, talhas elétricas de cabo de aço, ponte rolante, ponte rolante apoiada univiga, ponte rolante apoiada dupla-viga, pontes rolantes suspensas, pontes rolantes, guindaste giratório, monovias, blocos de rodas, kit de componentes, peças sobressalentes, transporte e movimentação de carga, transporte de carga, fornecimento de componentes. ">
<META NAME="description" CONTENT="A Stahl é fornecedora de equipamentos de movimentação de cargas e apresenta qualidade reconhecida mundialmente. Os equipamentos fabricados com tecnologia de ponta são fabricados na sede da Stahl,instalada em Itapecerica da Serra (SP).">
<link href="<?= HTMLBASE; ?>/Scripts/ui/start/jquery-ui-1.8.11.custom.css" rel="stylesheet" type="text/css" />


<?php include("../header.php"); ?>
<script type="text/javascript" src="<?= HTMLBASE; ?>/Scripts/ui/jquery-ui-1.8.11.custom.min.js"></script>
<script type="text/javascript" src="<?= HTMLBASE; ?>/jquery.bgpos.js"></script>
<script type="text/javascript" src="<?= HTMLBASE; ?>/jquery.cycle.lite.1.0.min.js"></script>
<script type="text/javascript" src="<?= HTMLBASE; ?>/downloads.js"></script>


<div id="container">
  <div id="sidebar">
    <h3 id="titulo_downloads"></h3>
    <ul>
      <li><a href="manuais.php">Manuais de Manutenção</a></li>
      <li><a href="lista-pecas.php">Lista de Peças</a></li>
      <li id="ativo">Catálogos / Folders</li>
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
      <h2>Catálogos e Folders</h2>
      <div class="downloadp">
        <h3>1.Cat&aacute;logos t&eacute;cnicos</h3>
        <ul class="pdf_download">
          <li>- Talhasde Cabo SH<a href="/downloads/talhas_de_cabo_de_aco_tipo_SH.pdf" target="_blank">
            <div class="bt_donwload"></div>
            </a></li>
          <li>- Talhas de Cabo AS7<a href="/downloads/talhas_de_cabo_de_aco_tipo_AS.pdf" target="_blank">
            <div class="bt_donwload"></div>
            </a></li>
          <li>- Talhas de Corrente<a href="/downloads/talhas_de_corrente_tipo_ST.pdf" target="_blank">
            <div class="bt_donwload"></div>
            </a></li>
          <li>- Blocos de Roda<a href="/downloads/blocos_roda.pdf" target="_blank">
            <div class="bt_donwload"></div>
            </a></li>
        </ul>
        <h3>2.Folders</h3>
        <ul class="pdf_download">
          <li>- Pontes Rolantes<a href="/downloads/folder_pontes.pdf" target="_blank">
            <div class="bt_donwload"></div>
            </a></li>
          <li>- Talhas SH<a href="/downloads/folder_talhas_sh.pdf" target="_blank">
            <div class="bt_donwload"></div>
            </a></li>
          <li>- Talhas ST<a href="/downloads/folder_talhas_st.pdf" target="_blank">
            <div class="bt_donwload"></div>
            </a></li>
          <li>- Blocos de Roda (ingl&ecirc;s) <a href="/downloads/folder_wheel_blocks_english.pdf" target="_blank">
            <div class="bt_donwload"></div>
            </a></li>
        </ul>
      </div>
      <br />
      <?php include("../lista.php"); ?>
    </div>
  </div>
  <br class="clearfloat" />
</div>
</div>
<div id="footer">
  <div id="footer2"></div>
</div>
<div id="dialog" title="Dados para Download" style="display:none; font-size:12px; text-align:left;">
            <input type="hidden" name="link" id="link" />
            <p style="margin: 10px 0;">Caso seja cadastrado, informe o seu e-mail e e enviaremos um link do
documento solicitado.</p>
            <form name="check_mail" id="check_mail" method="post">
                <table width="100%" border="2" cellpadding="2" cellspacing="0" align="center">
                    <tr>
                        <td>*Email</td>
                        <td><input name="email" id="cemail" class="email" size="30" type="text" /></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <input type="button" value="Enviar" />
                        </td>
                    </tr>
                </table>
            </form>
            <p style="margin: 10px 0; border-top: 1px solid #000; padding-top: 10px;">Caso não seja cadastrado, informe os dados abaixo e enviaremos um link do documento solicitado ao seu e-mail.</p>
            <form name="cadastro" id="cadastro" method="post">
                <table width="100%" border="2" cellpadding="2" cellspacing="0" align="center">
                    <tr>
                        <td>*Empresa</td>
                        <td><input name="empresa" id="nempresa" class="empresa" size="30" type="text" /></td>
                    </tr>
                    <tr>
                        <td>*Nome</td>
                        <td><input name="nome" id="nnome" class="nome" size="30" type="text" /></td>
                    </tr>
                    <tr>
                        <td>*Email</td>
                        <td><input name="email" id="nemail" class="email" size="30" type="text" /></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <input type="button" value="Enviar" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <!-- Google Code for Downloads Requisitados Conversion Page -->
        <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 980486573;
        var google_conversion_language = "en";
        var google_conversion_format = "3";
        var google_conversion_color = "ffffff";
        var google_conversion_label = "wuybCKO1pgMQrZPE0wM";
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
        <img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/980486573/?value=10,00&amp;label=wuybCKO1pgMQrZPE0wM&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>
</body>
</html>