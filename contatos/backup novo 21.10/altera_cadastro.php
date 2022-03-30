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
    <input type="submit" value="ALTERAR" onmousemove="Validar()" onmousedown="clique()";>
</form>

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
</body>
</html>