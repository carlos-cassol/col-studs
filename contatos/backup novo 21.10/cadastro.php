<!DOCTYPE html>
<html lang="en">
<head>
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
    <input type="submit" value="gravar" onmousemove="Validar()" onmousedown="clique()";>
</form>
<br> <br> <br>

<?php
    include("conecta.php"); // Fazendo a conexão com outro arquivo       
    $comando = $pdo->prepare("SELECT * FROM alunos");
    $resultado = $comando->execute();
    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
    foreach($resultado as $coluna)
    {
        $codigo = $coluna["cod"];
        $nome = $coluna["nome"];
        $peso = $coluna["peso"];
        $altura = $coluna["altura"];
        echo("$codigo - $nome - $peso - $altura  <br> <br>");
    }


?>









<script>
    function Validar()
    {
        var texto = altura.value;
        altura.value = texto.replace(",", ".") 

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
    }

</script>
<br> <br> <br> <br>


<h1> ESSE É O TÍTULO </h1>

<br> <br>

<p> texto normal </p>


</body>
</html>