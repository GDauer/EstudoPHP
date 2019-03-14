<?php
include_once "getset.php";
include_once "Conexaobd.php";
include_once  "ifelse.php";
$get = new estudos ($name,$email,$idade);

try {
    $stmt= mysqli_prepare ($conn,  "INSERT INTO Estudandophp(NOME, EMAIL ,idade) VALUES (?,?,?)");
    mysqli_stmt_bind_param($stmt,'ssi',$get->getName(),$get->getEmail(),$get->getIdade()) ;
    mysqli_stmt_execute($stmt);
    echo" Cadastrado com Sucesso";
    checkidade($get->getIdade());
    $n1 =3;
    $n2 =2;
    $s = $n1 + $n2;
    $m = $s /2;
    $num =0;

    echo "<br> O resultado de $n1 + $n2 e igual a $s </br>";
    echo "<br>o Resultado de $n1 + $n2 é igual a : </br>". ($n1 + $n2);
    echo "<br>o Resultado de $n1 - $n2 é igual a : </br>". ($n1 - $n2);
    echo "<br>o Resultado de $n1 / $n2 é igual a : </br>". ($n1 / $n2);
    echo "<br>o Resultado de $n1 * $n2 é igual a : </br>". ($n1 * $n2);
    echo "<br>o Resultado de $n1 % $n2 é igual a : </br>". ($n1 % $n2);
    echo "<br> A média de $n1 + $n2 é igual a : $m </br>";

    echo "<br>Diferente</br>";
    var_dump(10 != 10);
    var_dump(10 == 10) ;

    echo "<br>Indentico</br>";
     var_dump(10===10);;
    var_dump(10 === "10");
    var_dump(10 !==10);

    echo "<br>menor ou maior </br>";
    var_dump(10 < 10);
    var_dump(10 > 11);
    var_dump(10 >= 11);

    if (($num >10)&&($num <100) ){

        echo "<br>valor correto </br>";
    }

    else
        {
            echo "<br> Valor incorreto</br>";
        }

    do {
        $num = $num +1;
        echo $num . "\n";
    }

    while ($num <=10) ;








}catch(Exception $e){
    echo "erro";
}

?>

