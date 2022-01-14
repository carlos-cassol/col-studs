<style>
    .letras{
        font-size: 25px;
        position: relative;
        text-align: center;
        border: 7px;
        border-style: solid;
    }
    .voltar{
        position: relative;
        text-align: center;
        top: 20px;
    }
</style>
<div class="letras">
<h1>RESULTADO</h1>
<?php
$servidor = "localhost";
$usuario = "root";
$senha = "vertrigo";
$dbname = "mercado";
include("conecta.php");
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
$pesquisar = $_POST['ddpesquisarv'];
$result_estoque = "SELECT * from entradas WHERE dat like '$pesquisar'";
$result_pesquisa = mysqli_query($conn, $result_estoque);

while($rows_estoque = mysqli_fetch_array($result_pesquisa)){
    echo "Produto: ".$rows_estoque['nome'];
    echo " cadastrado no dia ".$rows_estoque['dat'];
    echo ", custando R$".$rows_estoque['preco']." a unidade";
    echo " com ".$rows_estoque['quant']." unidades em estoque"."<br><br>";
}

?>
</div>

<div class="voltar">
    <a href="index.html">VOLTAR
</div>