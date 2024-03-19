<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $t = 5;

    if ($t > 10) {
        echo "Have a good day";
        echo "<BR>";
        echo $t;
    }

    elseif($t>6)
    {
        echo "<h1>valor igual a:$t</h1>";
    }
    else
    echo "número menor que 6";
    ?>

</body>
</html>