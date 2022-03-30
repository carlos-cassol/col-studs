<?php
include("conecta.php");
$c = $_POST["codigo"];

$resultado = $pdo->prepare("DELETE FROM controle WHERE cod=:codigo");
$resultado->bindValue(":codigo",$c);
$resultado->execute()

?>

<script>
    alert("VEÍCULO REMOVIDO");
    window.open("deleta_caminhao.php","_self");
</script>