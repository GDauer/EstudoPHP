<!doctype html>
<html>

<head>
    <title>WEB TRIPS - BLOG</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="estilo.css" />

</head>

<body> 
      <div id="area-conteudo"> 
      <?php
        $nome =  $_GET ["nome"];
        $idade = $_GET ["idade"];
        $desc = $_GET ["desc"];
        echo  "$nome, $idade anos. </br> $desc";
        echo "</br> Você está participando do sorteio.";
      ?>
      <a href="home.html"> VOLTAR </a>
      </div> 
</body>

</html>