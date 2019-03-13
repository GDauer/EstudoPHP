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
    $m =($n1 + $n2)/2;
    echo "$nome tem $idade anos e a média de suas nota foi $m";
    $sit = ($m < 6)?"VOCÊ FOI REPROVADO":"VOCÊ FOI APROVADO";
    echo "</br> A situação do aluno é: $sit";
    ?>
</body>

</html> 