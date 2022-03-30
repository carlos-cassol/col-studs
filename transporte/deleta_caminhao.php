<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>REMOÇÃO DE CADASTRO</title>
</head>
<body>
<form action="deleta.php" method="post">
    CÓDIGO:
    <select id="codigo" name="codigo">
        <option>Selecione um código</option>
        
        
        <?php
            include("conecta.php"); // Fazendo a conexão com outro arquivo       
            $comando = $pdo->prepare("SELECT cod,placa FROM controle");
            $resultado = $comando->execute();
            $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultado as $coluna)
            {
                $codigo = $coluna["cod"];
                $placa = $coluna["placa"];

                echo("<option value='$codigo'>$codigo -> $placa</option>");
            }


        ?>
        
    </select>
    <br><br>
    <input type="submit" value="apagar">
    <br><br>
    <div class=volta><a href="index.html">VOLTAR <style>div {background-color: red; display:inline; border-style: solid;} </style></div>

</body>
</html>