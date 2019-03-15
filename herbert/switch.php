<!DOCTYPE html>
<html lang ="pr-br">
<head>
    <meta charset="UTF-8">

    <title>Instrução Switch na pratica-excript</title>
</head>
<body>

<?php
if(isset($_POST['cbxMES'])) {
$mes = $_POST['cbxMES'];
    switch ($mes) {
        case 1:
            echo "Janeiro";
            break;
        case 2:
            echo "Fevereiro";
            break;
        case 3:
            echo "Março";
            break;
        case 4:
            echo "Abril";
            break;
        case 5:
            echo "Maio";
            break;
        case 6:
            echo "Junho";
            break;
        case 7:
            echo "Julho";
            break;
        case 8:
            echo "Agosto";
            break;
        case 9:
            echo "Setembro";
            break;
        case 10:
            echo "Outubro";
            break;
        case 11:
            echo "Novembro";
            break;
        case 12:
            echo "Dezembro";
            break;
    }
}
?>



</body>

</html>
