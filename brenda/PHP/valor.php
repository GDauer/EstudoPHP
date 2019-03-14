<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Page Title</title>
   
</head>
<body>
    <?php
        $valor=$_GET ["v"];
        $rq= sqrt($valor);
        echo "O valor enviado foi $valor";
        echo "</br>A raiz de $valor é igual a $rq";
    ?>
      <a href="form.html"> </br>Voltar </a>
</body>
</html>