<?php
include("conecta.php");
$n = $_POST["nome"];
$p = $_POST["preco"];
$q = $_POST["quant"];
$c = $_POST["dat"];
$cod = $_POST["codigo"];
$resultado = $pdo->prepare("UPDATE entradas 
SET nome=:nome, preco=:preco, quant=:quant, dat=:dat WHERE cod=:codigo");

$resultado->bindValue(":nome",$n);
$resultado->bindValue(":preco",$p);
$resultado->bindValue(":quant",$q);
$resultado->bindValue(":dat",$c);
$resultado->bindValue(":codigo",$cod);
$resultado->execute();
?>

<script>
        alert("PRODUTO ATUALIZADO");
        window.open("altera_produto.php","_self");
</script>