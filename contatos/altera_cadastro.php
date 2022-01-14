<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO DE ALUNOS</title>
</head>
<body>
<form action="alterar.php" method="post">
    CÓDIGO:
    <select id="codigo" name="codigo">
        <option>Selecione um código</option>
        
        
        <?php
            include("conecta.php"); // Fazendo a conexão com outro arquivo       
            $comando = $pdo->prepare("SELECT cod FROM alunos");
            $resultado = $comando->execute();
            $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultado as $coluna)
            {
                $codigo = $coluna["cod"];
                echo("<option>$codigo</option>");
            }
        ?>
    </select>

    <br> <br>
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
    CEP
    <input type="text" id="cep" name="cep">
    <input type="submit" value="ALTERAR" onmousemove="Validar()" onmousedown="clique()";>
</form>
<?php
    include("tabela.php")
?>
<script>
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