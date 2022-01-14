<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CADASTRAR PRODUTO</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
<style>        header {
          background-color: rgb(0, 155, 103);
          padding: 30px;
          text-align: center;
          font-size: 35px;
          color: white;
        }.add{
            display: inline-block;
            width: 90px;
        }
        
        </style>
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
    
<header><h2>LOJA DE PRODUTOS PARAGUAIOS</h2></header>
<div class="add">
    <form action="add.php" method="post">
        NOME:
        <input type="text" id="nome" name="nome">
        <br> <br>
        PREÇO:
        <input type="text" id="preco" name="preco">
        <br> <br>
        QUANTIDADE:
        <input type="text" id="quant" name="quant">
        <br> <br>
        <p>DATA: <input type="text" id="dat" name="dat" /></p>
        <input type="submit" value="SALVAR" onmousemove="Validar()" onmousedown="clique()";>
        <br><br>
        </div>

        <div class=volta><a href="index.html">VOLTAR <style>.volta { display:inline; border-style: solid;} </style></div>
</form>
<script>
    function Validar()
    {
        var texto = preco.value;
        preco.value = texto.replace(",", ".") 

    }
</script>

<script>

    function clique()
    {
        if(nome.value=="")
        {
            alert("PREENCHA O NOME")
        }

        if(preco.value=="")
        {
            alert("PREENCHA O PESO")
        }

        if(quant.value=="")
        {
            alert("PREENCHA A ALTURA")
        }
        if(dat.value=="")
        {
            alert("ESCOLHA UMA DATA")
        }
    }
</script>
</body>
</html>
