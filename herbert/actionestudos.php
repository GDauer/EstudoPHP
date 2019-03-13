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
    echo $n1 =3;
         $n2 =2;
         $s = $n1 + $n2;
        echo "<br> A soma entre $n1 e $n2 e igual a $s";

}catch(Exception $e){
    echo "erro";


}

?>




