$(function(){
    $("button#entrar").on("click", function(e){
        e.preventDefault();

        var campoEmail = $("form#login #email").val();
        var campoSenha = $("form#login #senha").val();

        if(campoEmail.trim() == "" || campoSenha.trim() == ""){
            $("div#mensagem").html("Preencha todos os campos.");
        }else{
            $.ajax({
                url: "acoes/login.php",
                type: "POST",
                data: {
                    email: campoEmail,
                    senha: campoSenha
                },

                success: function(retorno){
                    try{
                        retorno = JSON.parse(retorno);
                    }catch{
                        
                    }

                    if(retorno["erro"]){
                        $("div#mensagem").html(retorno["mensagem"]);
                    }else{
                        window.location = "dashboard.php";
                    }
                },
                
                error: function(){
                    $("div#mensagem").html("Ocorreu um erro durante a solicitação.");
                }
            });   
        } 
    });
});