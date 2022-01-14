<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ATUALIZAR PRODUTOS</title>
    <style>
        * {
          box-sizing: border-box;
        }
        body {
          font-family: Arial, Helvetica, sans-serif;
        }
        /* Style the header */
        header {
          background-color: rgb(0, 155, 103);
          padding: 30px;
          text-align: center;
          font-size: 35px;
          color: white;
        }
        .vnds{
          position: relative;
          left: 20px;
          display: inline-block;
            width: 150px;

        }.label{
          
          position: relative;
        }
        </style>
            <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

    <script>
$(function() {
    $( "#dat" ).datepicker({
        showButtonPanel:true,
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        showOtherMonths: true,
        selectOtherMonths: true,
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']

    });
});
</script>

</head>
<body>
<header>
          <h2>LOJA DE PRODUTOS PARAGUAIOS</h2>
        </header>
        <nav>
            <h3>ATUALIZAR</h3>
            <div class="vnds">
    <form action="altera.php" method="post" autocomplete="off">
     CÓDIGO:
     <table>
       <tr>
     <select id="codigo" name="codigo">
        <option>SELECIONE UM CÓDIGO</option>
        <?php
            include("conecta.php");      
            $comando = $pdo->prepare("SELECT cod,nome FROM entradas");
            $resultado = $comando->execute();
            $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultado as $coluna)
            {
                $cod = $coluna["cod"];
                $nome = $coluna["nome"];

                echo("<option value='$cod'>$cod -> $nome</option>");
            }
        ?>
        </table></tr>
        <br>
       NOVO NOME:
        <input type="text" id="nome" name="nome">
        <br> <br>
        NOVO PREÇO:
        <input type="text" id="preco" name="preco"> <br><br>
        QUANTIDADE:
        <input type="text" id="quant" name="quant"><br><br>
        DATA:
        <input type="text" id="dat" name="dat">

        <input type="submit" value="SALVAR" onmousemove="Validar()">
        </form>
        <script>
    function Validar()
    {
        var texto = preco.value;
        preco.value = texto.replace(",", ".") 

    }
</script>
          </div>
       <div class="label"> <?php
    include("label.php")
?></div>
<div class=volta><a href="index.html">VOLTAR <style>.volta {; position: relative; left:20px; bottom: 130px; display:inline; border-style: solid;} </style></div>

</nav>
</body>
</html>