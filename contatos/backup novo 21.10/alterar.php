<?php
//Comando serve para trazer tudo que existe no conecta.php
//para este arquivo
include("conecta.php");
//Vamos pegar o nome:
$c = $_POST["codigo"];
$n = $_POST["nome"];
$p = $_POST["peso"];
$a = $_POST["altura"];

$resultado = $pdo->prepare("UPDATE alunos SET nome=:nome, peso=:peso, altura=:altura WHERE cod=:codigo");

$resultado->bindValue(":nome",$n);

$resultado->bindValue(":peso",$p);

$resultado->bindValue(":altura",$a);

$resultado->bindValue(":codigo",$c);

$resultado->execute();




?>

<script>
    alert("ALUNO ALTERADO");
    ?php echo($novo_codigo);
    window.open("altera_cadastro.php","_self");
</script>