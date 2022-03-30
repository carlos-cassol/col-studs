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
<h1 class="sbm">RESULTADO</h1>
    <div class="letras">
        <?php
        include("conecta.php");
            $servidor = "localhost";
            $usuario = "root";
            $senha = "vertrigo";
            $dbname = "mercado";
            $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
            $pesquisar = $_POST['yypesquisarv'];
            $comando =$pdo->prepare("SELECT * from entradas WHERE YEAR(dat) = '$pesquisar'");
            $resultado = $comando->execute();
            $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultado as $coluna){
                            $preco = $coluna["preco"];
                            $quant = $coluna["quant"];
                            $nome = $coluna["nome"];
                            $dat = $coluna["dat"];
                            $temp = explode('-',$dat);
                            $dat = $temp[2].'/'.$temp[1].'/'.$temp[0];
            echo "Produto: ".$nome;
            echo " vendido no dia ".$dat;
            echo ", custando R$".$preco." a unidade";
            echo " com ".$quant." unidades em estoque"."<br>";
            }
        ?>
    </div>

<div class="voltar">
    <a href="index.html">VOLTAR
</div>