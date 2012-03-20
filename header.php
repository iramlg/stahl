<link rel="shortcut icon" href="<?= HTMLBASE; ?>/img/favicon.ico" type="image/x-icon" />
<link href="<?= HTMLBASE; ?>/style.css" rel="stylesheet" type="text/css" />
<script src="<?= HTMLBASE; ?>/Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="<?= HTMLBASE; ?>/jquery-1.4.4.min.js" type="text/javascript"></script>
<script>
  $(document).ready(function() {

      // to store it in a variable
      var url = window.location.pathname.substring(10);
      console.log(url);

      $('#sidebar ul').find('a').each(function(){
        if($(this).attr('href') == url) {
          $(this).parent('li').attr('id', 'ativo');
        } else {}
      });

      //function () {}
      //if ($('#sidebar a').attr('href') = url) {
      //  $(this).parent('li').attr('id', 'ativo');
      //};
    //};
      
  });
</script>

<!-- /phpmyvisites -->
</head>
<body class="stahl">
<div id="header">
  <div id="header-img">
   <a href="<?= HTMLBASE; ?>/index.php"><h1>Stahl Talhas</h1></a>
    <div id="header_telefone"></div>
    <div id="nav">
      <ul>
        <li id="empresa"><a href="<?= HTMLBASE; ?>/index.php">Empresa</a></li>
        <li id="produtos"><a href="<?= HTMLBASE; ?>/produtos.php">Produtos</a></li>
        <li id="servicos"><a href="<?= HTMLBASE; ?>/servicos.php">Serviços</a></li>
        <li id="downloads"><a href="<?= HTMLBASE; ?>/downloads.php">Downloads</a></li>
        <li id="representantes"><a href="<?= HTMLBASE; ?>/representantes.php">Respresentantes</a></li>
        <li id="contato"><a href="<?= HTMLBASE; ?>/contato.php">Contato</a></li>
        <li id="novidades"><a href="<?= HTMLBASE; ?>/novidades/novidades.php">Novidades</a></li>
      </ul>
    </div>
  </div>
</div>