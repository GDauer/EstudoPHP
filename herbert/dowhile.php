<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>Estrutura do While- caso de uso -excript</title>
</head>

<body>


<?php


if(isset($_POST['dependentes'])) {
    $dependentes = $_POST['dependentes'];
    if (!is_numeric($dependentes)){

        $dependentes =1;
        echo "não numerico.....";
    }

    $conta = 0;
    echo "<table border ='1'>
    <tr>
        <th></th>
        <th>NOME</th>
        <th>NASCIMENTO</th>
    </tr>";

    do {
        $conta = $conta + 1;
        echo "
     <tr>
        <td>Dependente $conta</td>
        <td><input type ='text'  name ='nome'></td>
        <td><input type ='text'  name ='nascimento'></td>
    </tr>
    ";
    }while ($conta < $dependentes);


}



?>
</body>

</html>