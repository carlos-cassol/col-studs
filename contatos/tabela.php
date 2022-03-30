<!-- Aqui criamos uma tabela, tr cria as linhas, e td as divisórias da linha.
cellspacing define a grossura da linha da tabela e cellpadding define a distância entre 
os caracteres e a tabela
-->

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
            <td> Nome </td> 
            <td> Peso </td> 
            <td> Altura </td>
            <td> Idade </td> 
            <td> Endereço </td> 
            <td> Bairro </td>
            <td> Cidade </td>
            <td> CEP </td>
        </tr>
 
<?php
    include("conecta.php"); // Fazendo a conexão com outro arquivo       
    $comando = $pdo->prepare("SELECT * FROM alunos");
    $resultado = $comando->execute();
    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
    $L = 0;
    foreach($resultado as $coluna)
    {
        $codigo = $coluna["cod"];
        $nome = $coluna["nome"];
        $peso = $coluna["peso"];
        $altura = $coluna["altura"];
        $idade = $coluna["idade"];
        $endereco = $coluna["endereco"];
        $bairro = $coluna["bairro"];
        $cidade = $coluna["cidade"];
        $cep = $coluna["cep"];
        $L++;
        if($L%2==0)  //verificando se o resto da divisão é ZERO
        {
            echo("<tr class='linha_par'><td>$codigo</td><td>$nome</td><td>$peso</td><td>$altura</td>
            <td>$idade</td><td>$endereco</td><td>$bairro</td><td>$cidade</td><td>$cep</td></tr>");
        }else{
            echo("<tr class='linha_impar'><td>$codigo</td><td>$nome</td><td>$peso</td><td>$altura</td>
            <td>$idade</td><td>$endereco</td><td>$bairro</td><td>$cidade</td><td>$cep</td></tr>");
        }
        
    }


?>

</table>
