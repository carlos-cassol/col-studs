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
            $comando =$pdo->prepare("SELECT * from vendas WHERE YEAR(datav) = '$pesquisar'");
            //$comando->bindValue(":datav",$pesquisar);
            $resultado = $comando->execute();
            $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultado as $coluna){
                                        $idv = $coluna["idv"];
                                        $cod = $coluna["cod"];
                                        $datav = $coluna["datav"];
                                        $temp = explode('-',$datav);
                                        $datav = $temp[2].'/'.$temp[1].'/'.$temp[0];
            echo "Produto: Codigo ".$cod;
            echo " vendido no dia ".$datav;
            echo " com o código de venda ".$idv."<br>";
            }
        ?>
    </div>

<div class="voltar">
    <a href="index.html">VOLTAR
</div>