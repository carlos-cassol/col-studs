<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ALTERAÇÃO DE CAMINHÃO</title>
</head>
<body>
    <form action="altera.php" method="post">
        CÓDIGO:
        <select id="codigo" name="codigo">
        <option>selecione um codigo</option>
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
        <br><br>
        PLACA:
        <input type="text" id="placa" name="placa">
        <br><br>
        TRANSPORTADORA:
        <input type="text" id="trans" name="trans">
        <input type="submit" value="alterar">
    </form>
    <br><br>
    <div class=volta><a href="index.html">VOLTAR <style>div {background-color: red; display:inline; border-style: solid;} </style></div>

</body>
</html>