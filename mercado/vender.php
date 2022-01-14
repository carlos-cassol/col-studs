<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>VENDER</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

<script>
$(function() {
    $( "#datav" ).datepicker({
        showButtonPanel:true,
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true,
        showOtherMonths: true,
        selectOtherMonths: true,
        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho',
            'Agosto','Setembro','Outubro','Novembro','Dezembro'],
        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']

    });
});
</script>
<style>
      .voltar{
        position: relative;
        text-align: left;
        left: 20px;
        bottom: 8.5cm;
    }
        * {
          box-sizing: border-box;
        }
        .vnds{
          position: relative;
          left: 20px;
          display: inline-block;
            width: 90px;
        }.h1{
          position: relative;
          top: 10px;
        }
        body {
          font-family: Arial, Helvetica, sans-serif;
        }
        h1{
          font-size: 30px;
          position: relative;
          bottom: 150px;
        }
        header {
          background-color: rgb(0, 155, 103);
          padding: 30px;
          text-align: center;
          font-size: 35px;
          color: white;
        }.label{
          position:relative;
          bottom: 5cm;

        }.titulo{
          font-size: 30px;
          position: relative;
          left: 700px;
          bottom: 156px;
        }.tabela{
          position:relative;
          left: 6cm;
        }
        </style>
</head>
<body>
    <header><h2>LOJA DE PRODUTOS PARAGUAIOS</h2></header>
    <h1 class="h1">VENDER PRODUTOS</h1>
    <div class="vnds">
      <form action="addv.php" method="post" autocomplete="off">
    CÓDIGO:
    <table class="tabela">
      <tr>
        <select id="cod" name="cod">
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
        <br>
        </tr>
        </table>
        <br>
        <p> DATA: <input type= "text" id="datav" name="datav"></p>
        <input type="submit" value="SALVAR" onmousemove="Validar()" onmousedown="clique()";>
        <br><br><br><br><br><br>
        </form>

<script>

    function clique()
    {
        if(cod.value=="")
        {
            alert("ESCOLHA UM CODIGO")
        }
        if(nomev.value=="")
        {
            alert("PREENCHA O NOME")
        }
        if(datv.value=="")
        {
            alert("ESCOLHA UMA DATA DE VENDA")
        }
    }
</script>
          </div>
          <p class="titulo">PRODUTOS EM ESTOQUE<p>
          
          
          <div class="label"> <?php
    include("label.php")
?></div>
          <div class="voltar">
    <a href="index.html">VOLTAR
</div>

          

</body>
</html>