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
<form action="deletar.php" method="post">
    CÓDIGO:
    <select id="codigo" name="codigo">
        <option>Selecione um código</option>
        <?php
            include("conecta.php"); // Fazendo a conexão com outro arquivo       
            $comando = $pdo->prepare("SELECT cod,nome FROM alunos");
            $resultado = $comando->execute();
            $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultado as $coluna)
            {
                $codigo = $coluna["cod"];
                $nome = $coluna["nome"];
                echo("<option value='$codigo'>$codigo -> $nome</option>");
            }
        ?>
    </select>
    <br> <br>
    <input type="submit" value="APAGAR" onmousemove="Validar()" onmousedown="clique()";>
</form>
<br> <br> <br>
<?php
    include("tabela.php")
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
        if(codigo.value=="")
        {
            alert("PREENCHA O CODIGO")
        }  
    }
</script>
<div class=volta><a href="index.html">VOLTAR <style>div {background-color: red; display:inline; border-style: solid;} </style></div>
</body>
</html>