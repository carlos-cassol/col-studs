<?php
try{
    $pdo = new PDO("mysql:dbname=mercado;gost=localhost","root","vertrigo");
}
catch(PDOException $erro){ 
   // Frase que aparecerá em caso de algum erro:
    echo "Erro na conexão: " . $erro->getMessage();
}
?>