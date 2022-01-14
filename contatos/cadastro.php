<!DOCTYPE html>
<html lang="en">
<head>
<!-- esse é um comentário  -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO DE ALUNOS</title>

    <link rel="stylesheet" type="text/css" href="campo.css" media="screen" />

</head>
<body>
<form action="gravar.php" method="post">
    NOME: 
    <input type="text" id="nome" name="nome">
    
    <br> <br>
    PESO:
    <input type="text" id="peso" name="peso">
    
    <br> <br>

    ALTURA
    <input type="text" id="altura" name="altura">
    <br> <br>

    IDADE
    <input type="text" id="idade" name="idade">
    <br> <br>
    CEP
    <input type="text" id="cep" name="cep" size="6">
    <img src="imagens/lupa.png" width="30px" onclick="pesquisar()">
    <br><br>
    ENDERECO
    <input type="text" id="endereco" name="endereco">
    <br> <br>
    NUMERO
    <input type="text" id="numero" name="numero">
    <br> <br>
    BAIRRO
    <input type="text" id="bairro" name="bairro">
    <br> <br>
    CIDADE
    <input type="text" id="cidade" name="cidade">
    <br> <br>

    <br>

    <input type="submit" value="gravar" onmousemove="Validar()" onmousedown="clique()";>
</form>
<br> <br> <br>

<?php
    include("tabela.php")
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
    function pesquisar()
    {
    //Início do Comando AJAX
		$.ajax({

			url: 'https://viacep.com.br/ws/'+cep.value+'/json/unicode/',
			dataType: 'json',
			success: function(resposta){
                if(resposta.erro==true)
                    {
                        alert("ENDEREÇO NÃO ENCONTRADO")
                    }

				$("#endereco").val(resposta.logradouro);
				$("#bairro").val(resposta.bairro);
				$("#cidade").val(resposta.localidade);
			}
		});
    }
    function Validar()
    {
        var texto = altura.value;
        altura.value = texto.replace(",", ".") 

        var texto = cep.value;
        cep.value = texto.replace("-", "")
    }
</script>

<script>

    function clique()
    {
        if(nome.value=="")
        {
            alert("PREENCHA O NOME")
        }

        if(peso.value=="")
        {
            alert("PREENCHA O PESO")
        }

        if(altura.value=="")
        {
            alert("PREENCHA A ALTURA")
        }
        if(idade.value=="")
        {
            alert("PREENCHA A IDADE")
        }

        if(endereco.value=="")
        {
            alert("PREENCHA O ENDERECO")
        }

        if(numero.value=="")
        {
            alert("PREENCHA O NUMERO")
        }
        if(cidade.value=="")
        {
            alert("PREENCHA A CIDADE")
        }

        if(cep.value=="")
        {
            alert("PREENCHA O CEP")
        }
    }

</script>

<div class=volta><a href="index.html">VOLTAR <style>div {background-color: red; display:inline; border-style: solid;} </style></div>

</body>
</html>