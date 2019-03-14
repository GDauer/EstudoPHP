<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>Tabuada - Curso PHP -excript</title>
</head>

<body>

<form method ="post">
    <h3>Informe no campo abaixo a tabuada desejada </h3>
    <input type=""text name="edtabuada">
    <input type ="submit">


</form>

<?php

if(isset($_POST['edtabuada'])){

    $tab = $_POST['edtabuada'];
    if(!is_numeric($tab)){
        echo "<br>o valor informado não é um número,<br>";
    }else{

        for($num=0; $num<=10 ;$num++){

            echo $num ." x " . $tab." = ".($num * $tab) . "<br>";
        }




    }


}

?>






</body>




</html>