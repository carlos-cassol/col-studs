<?php
  //ASSIM SE FAZ UM COMENTÁRIO
    //VARIÁVEL PARA CONEXÃO:

try{
    $pdo = new PDO("mysql:dbname=contatos;gost=localhost","root","vertrigo");

}
catch(PDOException $erro){ 
   // Frase que aparecerá em caso de algum erro:
    echo "Erro na conexão: " . $erro->getMessage();
}






?>
