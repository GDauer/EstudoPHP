<?php
include_once "getset.php";
include_once "Conexaobd.php";

$get = new estudos ($name,$email);

try {
    $stmt= mysqli_prepare ($conn,  "INSERT INTO Estudandophp(NOME, EMAIL) VALUES (?,?)");
    mysqli_stmt_bind_param($stmt,'ss',$get->getName(),$get->getEmail());
    mysqli_stmt_execute($stmt);
    echo" Cadastrado com Sucesso";
}catch(Exception $e){
    echo "erro";


}

?>




