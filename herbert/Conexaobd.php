<?php
$host="localhost";
$banco ="usuario";
$usr="root";
$pwd="root";

$conn =mysqli_connect($host,$usr,$pwd,$banco);

if(!$conn) {

    die("falha de conexão:" . mysqli_connect_error());
}
else {

}

?>