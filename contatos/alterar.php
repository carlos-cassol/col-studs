<?php
//Comando serve para trazer tudo que existe no conecta.php
//para este arquivo
include("conecta.php");
//Vamos pegar o nome:
$c = $_POST["codigo"];
$n = $_POST["nome"];
$p = $_POST["peso"];
$a = $_POST["altura"];
$i = $_POST["idade"];
$en = $_POST["endereco"];
$nu = $_POST["numero"];
$ba = $_POST["bairro"];
$ci = $_POST["cidade"];
$ce = $_POST["cep"];

$resultado = $pdo->prepare("UPDATE alunos SET nome=:nome, peso=:peso, altura=:altura, idade=:idade, 
endereco=:endereco, numero=:numero, bairro=:bairro, cidade=:cidade, cep=:cep WHERE cod=:codigo");

$resultado->bindValue(":nome",$n);

$resultado->bindValue(":peso",$p);

$resultado->bindValue(":altura",$a);

$resultado->bindValue(":idade",$i);

$resultado->bindValue(":endereco",$en);

$resultado->bindValue(":numero",$nu);

$resultado->bindValue(":bairro",$ba);

$resultado->bindValue(":cidade",$ci);

$resultado->bindValue(":cep",$ce);

$resultado->bindValue(":codigo",$c);
$resultado->execute();
?>

<script>
    alert("ALUNO ALTERADO COM SUCESSO");
    window.open("altera_cadastro.php","_self");
</script>


