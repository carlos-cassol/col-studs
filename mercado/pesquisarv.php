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
    }.sbm{
        position: relative;
        text-align: center;
    }
</style>
<div class="sbm">
<h1>RESULTADO</h1>
</div>
<div class="letras">
<?php
$servidor = "localhost";
$usuario = "root";
$senha = "vertrigo";
$dbname = "mercado";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
$pesquisar = $_POST['ddpesquisarv'];
$result_estoque = "SELECT * from vendas WHERE datav like '$pesquisar'";
$result_pesquisa = mysqli_query($conn, $result_estoque);

while($rows_estoque = mysqli_fetch_array($result_pesquisa)){
    echo "Produto: Codigo ".$rows_estoque['cod'];
    echo " vendido no dia ".$rows_estoque['datav']."<br>";
}


?>
</div>

<div class="voltar">
    <a href="index.html">VOLTAR
</div>