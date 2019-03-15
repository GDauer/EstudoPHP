<!DOCTYPE html>
<html>

<head>
    <title> TEST </title>
    <meta charset="utf-8" />
</head>

<body>
    <?php
    function soma()
    {
        $p = func_get_args();
        $t = func_num_args();
        $s = 0;
        for ($i = 0; $i < $t; $i++) {
            $s = $s + $p[$i];
        }
        return $s;
    }
    $r = soma(3, 5, 2, 12);
    echo "A soma dos valores e $r";
    ?>
</body>
</html> 