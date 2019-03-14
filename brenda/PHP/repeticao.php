

<!DOCTYPE html>
<html>

<head>
    <title> TEST </title>
    <meta charset="utf-8" />
</head>

<body>
    <div>
        <form method="GET" action="repeticao2.php">
            <?php
            $c=1;
            while ($c<5){
                echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/>";
                $c++;
            }
            ?>
            <input type="submit" value="Enviar" class="botao"/>
        </form>
    </div>
</body>

</html> 
