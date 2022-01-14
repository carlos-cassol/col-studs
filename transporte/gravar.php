<?php
//Comando serve para trazer tudo que existe no conecta.php
//para este arquivo
include("conecta.php");
//Vamos pegar o nome:

$p = $_POST["placa"];
$t = $_POST["trans"];


$resultado = $pdo->prepare("INSERT INTO controle(placa,trans) VALUES(:placa,:trans)");

$resultado->bindValue(":placa",$p);

$resultado->bindValue(":trans",$t);
$resultado->execute();
$novo_codigo = $pdo->lastInsertId();



?>

<script>
    alert("NOVO CAMINHÃO INSERIDO COM SUCESSO");
    window.open("cadastro.php","_self");
</script>