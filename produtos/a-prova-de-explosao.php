<?php include("../config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Stahl Talhas | À prova de explosão - Produtos</title>
        <META NAME="keywords" CONTENT="equipamentos de elevação à prova de explosão, equipamentos de elevação, equipamentos de elevação anti explosão, equipamentos de elevação anti-explosivos, talha elétrica de corrente, talhas elétricas de cabo de aço, ponte rolante, ponte rolante apoiada univiga, ponte rolante apoiada dupla-viga, pontes rolantes suspensas, pontes rolantes, guindaste giratório, monovias, blocos de rodas, kit de componentes, peças sobressalentes, transporte e movimentação de carga, transporte de carga, fornecimento de componentes." />
        <META NAME="description" CONTENT="A STAHL, como fornecedora exclusiva de peças de todos os equipamentos Stahl no Brasil, possui estoque permanente das peças originais sobressalentes dos equipamentos que já saíram de linha e dos equipamentos atualmente em fabricação." />
        <?php include("../header.php"); ?>
        <link href="../Scripts/ui/start/jquery-ui-1.8.11.custom.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="../Scripts/ui/jquery-ui-1.8.11.custom.min.js"></script>
        <script type="text/javascript" src="../jquery.bgpos.js"></script>
        <script type="text/javascript" src="../jquery.cycle.lite.1.0.min.js"></script>
        <script type="text/javascript" src="../downloads.js"></script>
        <script type="text/javascript"> 
            $(function() {

                $('#slideshow1').cycle();
    
            });

        </script>
        <div id="container">
            <div id="sidebar">
                <?php include("menu.php"); ?>
                <div id="banner"> </div>
            </div>
            <div id="bg_explosao"> </div>
            <div id="mainContent">
                <div id="sidebar1"> 
                    <img src="../images/Detalhe_ex1.jpg" alt="Detalhe Pe&ccedil;as" width="100" height="100" />
                    <img src="../images/Detalhe_ex2.jpg" alt="Detalhe De Pe&ccedil;as" width="100" height="100" />
                    <img src="../images/Detalhe_ex3.jpg" alt="Detalhe De Pe&ccedil;as" width="100" height="100" /><br />
                </div>
                <div id="conteudo">
                    <h2>À prova de explosão</h2>
                    <h3>Equipamentos de elevação</h3>
                    <p>A STAHL é líder mundial na fabricação de equipamentos de elevação à prova de explosão.</p>
                    <div style="height:260px;">
                        <div id="slideshow1">
                            <img src="../img/image7a.jpg" alt="Equipamentos de eleva&ccedil;&atilde;o" width="360" height="250"/>
                            <img src="../img/image8.jpg" alt="Equipamentos de eleva&ccedil;&atilde;o" width="360" height="250" />
                            <img src="../img/image9.jpg" alt="Equipamentos de eleva&ccedil;&atilde;o" width="360" height="250" />
                        </div>
                    </div>
                    <p>Todos os equipamentos apresentados em nosso web site podem ser fornecidos na versão <strong>à prova de explosão</strong> para serem utilizadas em áreas classificadas.</p>
                    <ul class="pdf_download">
                        <li><a href="/downloads/br_ex-kompetenz_en.pdf" target="_blank">
                                Clique aqui 
                            </a>e faça o download do catálogo "Expertise in explosion protection".</li>
                    </ul>                                       
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
    </body>
</html>