<?php
include("conecta.php");
$c = $_POST["codigo"];
$p = $_POST["placa"];
$t = $_POST["trans"];

$resultado = $pdo->prepare("UPDATE controle SET placa=:placa, trans=:trans WHERE cod=:codigo");

$resultado->bindValue(":placa",$p);

$resultado->bindValue(":codigo",$c);

$resultado->bindValue(":trans",$t);

$resultado->execute();
?>

<script>
        alert("VEÍCULO ALTERADO");
        window.open("altera_caminhao.php","_self");
</script>