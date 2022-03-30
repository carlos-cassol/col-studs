<?php

include("conecta.php");
$n = $_POST["nome"];
$p = $_POST["preco"];
$q = $_POST["quant"];
$c = $_POST["dat"];

$resultado = $pdo->prepare("INSERT INTO entradas(nome,preco,quant,dat)
 VALUES(:nome,:preco,:quant,:dat)");

$resultado->bindValue(":nome",$n);
$resultado->bindValue(":preco",$p);
$resultado->bindValue(":quant",$q);
$resultado->bindValue(":dat",$c);
$resultado->execute();
$novo_codigo = $pdo->lastInsertId();
?>

<script>
    alert("PRODUTO INSERIDO COM SUCESSO");
    window.open("gravar.php","_self");
</script>