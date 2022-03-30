<?php

include("conecta.php");
$cv = $_POST["datav"];
$c = $_POST["cod"];

$resultado = $pdo->prepare("INSERT INTO vendas(datav,cod)
 VALUES(:datav,:cod)");

$resultado->bindValue(":datav",$cv);
$resultado->bindValue(":cod",$c);
$resultado->execute();
$novo_codigo = $pdo->lastInsertId();
?>
<?php
    include("conecta.php");
    $cod     = $_POST["cod"];
    $dat       = $_POST["datav"];

    $comando = $pdo->prepare("SELECT nome,quant,preco,dat FROM entradas WHERE cod=:cod");
    $comando ->bindValue(":cod",$cod);
    $resultado = $comando->execute();
    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
    foreach($resultado as $coluna){
        $nome           = $coluna["nome"];
        $quant          = $coluna["quant"];
        $preco          = $coluna["preco"];
        $dat            = $coluna["dat"];
    }

    $newQuant = $quant - 1;
    if ($newQuant > 0){
        $resultado = $pdo->prepare("UPDATE entradas SET nome=:nome,quant=:quant,preco=:preco,dat=:dat WHERE cod=:cod");
        $resultado ->bindValue(":nome",$nome);
        $resultado ->bindValue(":quant",$newQuant);
        $resultado ->bindValue(":preco",$preco);
        $resultado ->bindValue(":dat",$dat);
        $resultado ->bindValue(":cod",$cod);
        $resultado ->execute();
        echo "<script>alert ('Venda bem sucedida!')</script>";
    }else{
        echo "<script>alert ('Não existem mais produtos em estoque') </script>";
    }

?><script>window.open("vender.php","_self");</script>
