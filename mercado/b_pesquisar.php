<style>
    .letras{
        font-size: 25px;
        position: relative;
        text-align: center;
        border: 7px;
        border-style: solid;
        width: 20cm;
        left: 28.5%
    }
    .voltar{
        position: relative;
        text-align: center;
        top: 20px;

    }
</style>
<div border="5" class="letras">
<?php
$servidor = "localhost";
$usuario = "root";
$senha = "vertrigo";
$dbname = "mercado";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
$pesquisar = $_POST['pesquisar'];
$result_estoque = "SELECT nome, quant, preco from entradas WHERE nome like '%$pesquisar%'";
$result_pesquisa = mysqli_query($conn, $result_estoque);

while($rows_estoque = mysqli_fetch_array($result_pesquisa)){
    echo "Produto: ".$rows_estoque['nome'];
    echo ", com ".$rows_estoque['quant']." unidades em estoque ";
    echo " a R$ ".$rows_estoque['preco']." por peça."."<br>";
}
?>
</div>
<div class="voltar">
    <a href="index.html">VOLTAR
</div>