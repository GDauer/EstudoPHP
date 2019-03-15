<!DOCTYPE html>
<html>

<head>
    <title> TEST </title>
    <meta charset="utf-8" />
</head>

<body>
    <?php
    function soma($a, $b)
    {
        $s = $a + $b;
        return $s;
    }
    $x = 9;
    $y = 15;
    $r = soma($x, $y);
    echo "A soma entre $x e $y é igual a $r";
    ?>
</body>

</html> 