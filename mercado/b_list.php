<style>
    .cabecalho{
        background-color:yellow;
        font-size:20px;
    }
    .linha_par{
        background-color:#C0C0C0;
        
    }
    .linha_impar{
        background-color:#1C1C1C;
        color:#FFFAFA;
    }

</style>

<table align="center" border="1" cellspacing="0" cellpadding="5">
        <tr class="cabecalho">
            <td align="center"> Nome </td>
            <td align="center"> Quantidade </td>
            <td align="center"> Preço </td> 
        </tr>
        
<div class="letras">
<?php
    include("conecta.php"); // Fazendo a conexão com outro arquivo       
    $pesquisar = $_POST['pesquisar'];
    $comando = $pdo->prepare("SELECT nome, quant, preco FROM entradas where nome like '%$pesquisar'");
    $resultado = $comando->execute();
    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
    $L = 0;
    foreach($resultado as $coluna)
    {
        
        $n = $coluna["nome"];
        $q = $coluna["quant"];
        $p = $coluna["preco"];
        $L++;
        if($L%2==0)  //verificando se o resto da divisão é ZERO
        {
            echo("<tr class='linha_par'><td>$n</td><td>$q</td><td>$p</td></tr>");
        }else{
            echo("<tr class='linha_impar'><td>$n</td><td>$q</td><td>$p</td></tr>");
        }   
    }
?>

</table>
