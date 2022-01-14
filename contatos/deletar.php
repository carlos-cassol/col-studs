<?php
//Comando serve para trazer tudo que existe no conecta.php
//para este arquivo
include("conecta.php");
//Vamos pegar o nome:
$c = $_POST["codigo"];


$resultado = $pdo->prepare("DELETE FROM alunos WHERE cod=:codigo");

$resultado->bindValue(":codigo",$c);

$resultado->execute();




?>

<script>
    alert("ALUNO ALTERADO");
    window.open("deletar_cadastro.php","_self");
    
</script>