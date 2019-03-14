<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>Estrutura do While- caso de uso -excript</title>
</head>

<body>

<form method ="post">
    <h4>Digite a quantidade de seus Dependentes. Em seguida preencha o formulário</h4>
    <input type=""text name="dependentes">
    <input type ="submit">

</form>


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