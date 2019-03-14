<!DOCTYPE html>
<html>

<head>
    <title> TEST </title>
    <meta charset="utf-8" />
</head>

<body>
    <?php
    $Nome = isset($_GET["nome"]) ? $_GET["nome"] : 1900;
    $Idade = isset($_GET["idade"]) ? $_GET["idade"] : 0;
    echo "$Nome Você tem $Idade anos</br>";
    if ($Idade >= 18) {
        echo "</br>Você é maior de idade, com essa idade você já pode dirigir </br>";
    } else {
        echo "</br>Você é menor de idade, com essa idade você não pode dirigir </br>";
        if ($Idade >= 16 && $Idade <= 18) {
            echo " </br> Mas por ser ntre 16 a 18 anos, em outros países você pode dirigir</br>";
        }
    }
    ?>
    <a href="testeif-else.html"> VOLTAR </a>

</body>

</html> 