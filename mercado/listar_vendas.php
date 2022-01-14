<!DOCTYPE html>
<html lang="en">
<head>
    <style>    
    .voltar{
        position: relative;
        left: 6px;
        top: 20px;
        
    }
    </style>
    <meta charset="UTF-8">
    <title>LISTAR ESTOQUE</title>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

    <script>
    $(function() {
        $( "#datva" ).datepicker({
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
<script>
    $(function() {
        $( "#datvm" ).datepicker({
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
<script>
    $(function() {
        $( "#datvd" ).datepicker({
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
    <style>
        * {
          box-sizing: border-box;
        }
        body {
          font-family: Arial, Helvetica, sans-serif;
        }
        header {
          background-color: rgb(0, 155, 103);
          padding: 30px;
          text-align: center;
          font-size: 35px;
          color: white;
        }
        </style>
</head>
<body>
  <header><h2>LOJA DE PRODUTOS PARAGUAIOS</h2></header>
    <h1>PESQUISAR EM VENDAS</h1>
    <form method="POST" action="pesquisarv.php" autocomplete="off">
        Pesquisar por dia:<input type="text" name="ddpesquisarv" id="datva" placeholder="PESQUISAR">
        <input type="submit" value=PROCURAR>
      </form><br><br>
      <form method="POST" action="pesquisarvmonth.php" autocomplete="off">
        Pesquisar por mês:<input type="text" name="mmpesquisarv" id="datvd" placeholder="PESQUISAR">
        <input type="submit" value=PROCURAR>
      </form><br><br>
      <form method="POST" action="pesquisarvm.php" autocomplete="off">
        Pesquisar por ano:<input type="text" name="yypesquisarv" id="datvm" placeholder="PESQUISAR">
        <input type="submit" value=PROCURAR>
      </form>
        <div class="voltar">
    <a href="index.html">VOLTAR AO INÍCIO
</div>
</body>
</html>