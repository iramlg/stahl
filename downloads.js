$(function(){
    $('ul.pdf_download li a').click(function(){
        $("#link").val($(this).attr('href'));
        $("#dialog").dialog({
            width: 350, 
            modal: true, 
            resizable: false
        });
        return false;
    });

    $('#check_mail input:button').click(function(){
        var email = $('#cemail').val();

        if (!email){
            alert('Informe seu e-mail');
        }else
            loadCadastro('check', $("#link").val(), email);

        return false;
    });

    $('#cadastro input:button').click(function(){
       var email = $('#nemail') .val();
       var empresa = $('#nempresa').val();
       var nome = $('#nnome').val();

       if (!email || !nome || !empresa){
           alert('Informe todos os dados para o cadastro');
       }else
           loadCadastro('new', $('#link').val(), email, nome, empresa);

       return false;
    });
});

var loadCadastro = function(tipo, link, email, nome, empresa){
    $.post(
        '/downloads_script.php',
        {
            tipo: tipo, 
            link: link,
            email: email, 
            nome: nome, 
            empresa: empresa
        },
        function(data){
            alert(data.msg);
        },
        'json'
    );
}