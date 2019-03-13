<!DOCTYPE html>
<html>

<head>
    <title> TEST </title>
    <meta charset="utf-8" />
</head>

<body>
    <?php
    $nome = Brenda;
    $idade = 20;
    $n1 = $_GET["a"];
    $n2 = $_GET ["b"];
    $a = $n1 + $n2;
    $b = $n1 - $n2;
    echo "$nome tem $idade anos!";
    echo "<br/><br/> A soma das notas entre $n1 e $n2 é igual a: $a";
    echo "<br/>  A subtração das notas entre $n1 e $n2 é igual a: $b";
   
    ?>
</body>

</html> 