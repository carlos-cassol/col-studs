<?php
//Comando serve para trazer tudo que existe no conecta.php
//para este arquivo
include("conecta.php");
//Vamos pegar o nome:

$n = $_POST["nome"];
$p = $_POST["peso"];
$a = $_POST["altura"];
$i = $_POST["idade"];
$en = $_POST["endereco"];
$nu = $_POST["numero"];
$ba = $_POST["bairro"];
$ci = $_POST["cidade"];
$ce = $_POST["cep"];

$resultado = $pdo->prepare("INSERT INTO alunos(nome,peso,altura,idade,endereco,
numero,bairro,cidade,cep) VALUES(:nome,:peso,:altura,:idade,:endereco,:numero,:bairro,:cidade,:cep)");

$resultado->bindValue(":nome",$n);
$resultado->bindValue(":peso",$p);
$resultado->bindValue(":altura",$a);
$resultado->bindValue(":idade",$i);
$resultado->bindValue(":endereco",$en);
$resultado->bindValue(":numero",$nu);
$resultado->bindValue(":bairro",$ba);
$resultado->bindValue(":cidade",$ci);
$resultado->bindValue(":cep",$ce);
$resultado->execute();
$novo_codigo = $pdo->lastInsertId();

?>
<script>
    alert("NOVO ALUNO INSERIDO COM O CÓDIGO <?php echo($novo_codigo); ?>");
    window.open("cadastro.php","_self");
</script>