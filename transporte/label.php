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
            <td> Código </td>
            <td> Placa </td> 
            <td> Transportadora </td> 
        </tr>
 
<?php
    include("conecta.php"); // Fazendo a conexão com outro arquivo       
    $comando = $pdo->prepare("SELECT * FROM controle");
    $resultado = $comando->execute();
    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
    $L = 0;
    foreach($resultado as $coluna)
    {
        $codigo = $coluna["cod"];
        $placa = $coluna["placa"];
        $trans = $coluna["trans"];
        $L++;
        if($L%2==0)  //verificando se o resto da divisão é ZERO
        {
            echo("<tr class='linha_par'><td>$codigo</td><td>$placa</td><td>$trans</td></tr>");
        }else{
            echo("<tr class='linha_par'><td>$codigo</td><td>$placa</td><td>$trans</td></tr>");
        }
        
    }


?>

</table>

