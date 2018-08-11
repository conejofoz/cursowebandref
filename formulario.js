$("#formulario").submit(function(e){
    e.preventDefault();
    var formulario = $(this);
    var retorno = insereFormulario(formulario);
});



function insereFormulario(formulario) {
    $.ajax({
        type:"POST",
        data:formulario.serialize(),
        url:"inserir.php",
        acync:false
    }).then(sucesso, falha);





    function sucesso(retornoPHP){
        $sucesso = $.parseJSON(retornoPHP)["sucesso"];
        $mensagem = $.parseJSON(retornoPHP)["mensagem"];
        $("#mensagem").show();
        if($sucesso){
            $("#mensagem").html($mensagem);
        } else {
            $("#mensagem").html($mensagem);
        }
    }
}