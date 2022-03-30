<?php
//Comando serve para trazer tudo que existe no conecta.php
//para este arquivo
include("conecta.php");
//Vamos pegar o nome:

$n = $_POST["nome"];
$p = $_POST["peso"];
$a = $_POST["altura"];

$resultado = $pdo->prepare("INSERT INTO alunos(nome,peso,altura) VALUES(:nome,:peso,:altura)");

$resultado->bindValue(":nome",$n);

$resultado->bindValue(":peso",$p);

$resultado->bindValue(":altura",$a);

$resultado->execute();
$novo_codigo = $pdo->lastInsertId();



?>

<script>
    alert("NOVO ALUNO INSERIDO COM O CÓDIGO: <?php echo($novo_codigo); ?>");
    window.open("cadastro.php","_self");
</script>