<?php

 function checkidade($idade=0)
{
    if ($idade < 18) {

        echo "<br> A idade é de uma criança ou de um adolescente";

    } elseif ($idade >= 18 and $idade < 60) {
        echo "<br>A idade é de um adulto";
    } else {

        echo "<br>A idade é de uma pessoa de terceira idade";


    }






}
?>