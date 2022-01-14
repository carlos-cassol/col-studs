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
<!-- para chamar class, se usa .
para chamar id, se usa # -->
<table align="center" border="1" cellspacing="0" cellpadding="5">
        <tr class="cabecalho">
            <td> ID </td> 
            <td align="center"> Nome</td>
            <td align="center"> Preço </td> 
            <td align="center"> Quantidade </td>
            <td align="center"> Data </td> 
        </tr>
<?php
    include("conecta.php"); // Fazendo a conexão com outro arquivo       
    $comando = $pdo->prepare("SELECT * FROM entradas");
    $resultado = $comando->execute();
    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
    $L = 0;
    foreach($resultado as $coluna)
    {
        $cod = $coluna["cod"];
        $nome = $coluna["nome"];
        $preco = $coluna["preco"];
        $quant = $coluna["quant"];
        $dat = $coluna["dat"];
        $L++;
        if($L%2==0)  //verificando se o resto da divisão é ZERO
        {
            echo("<tr class='linha_par'><td>$cod</td><td>$nome</td><td>$preco</td><td>$quant</td><td>$dat</td></tr>");
        }else{
            echo("<tr class='linha_impar'><td>$cod</td><td>$nome</td><td>$preco</td><td>$quant</td><td>$dat</td></tr>");
        }   
    }
?>
</table>