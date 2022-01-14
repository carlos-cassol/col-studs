<style>
    .letras{
        font-size: 25px;
        position: relative;
        text-align: center;
    }
    .voltar{
        position: relative;
        text-align: center;
        top: 20px;
    }
</style>
<h1>RESULTADO</h1>
<div class="letras">
<?php
$servidor = "localhost";
$usuario = "root";
$senha = "vertrigo";
$dbname = "mercado";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
$pesquisar = $_POST['pesquisar'];
$result_estoque = "SELECT * from entradas WHERE dat like '%$pesquisar%'";
$result_pesquisa = mysqli_query($conn, $result_estoque);

while($rows_estoque = mysqli_fetch_array($result_pesquisa)){
    echo "Produto: ".$rows_estoque['nome'];
    echo ", R$".$rows_estoque['preco']." por peça";
    echo " com ".$rows_estoque['quant']." unidades em estoque."."<br>";
}
?>
</div>
<div class="voltar">
    <a href="index.html">VOLTAR
</div>