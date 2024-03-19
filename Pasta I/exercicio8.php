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
    $n1 = 7;
    $n2 = 3;
    $media = ($n1 + $n2) /2;

    if(($media>= 0) && ($media< 10))
    {

    if($media>=8)
   {
    echo "Nota A";
   }
   else if(($media<=8)&&($media>=6))
   {
    echo "Nota B";
   }
   else if(($media>=5))
   {
    echo "Nota C";
   }
    else{
    echo "Reprovado";
   }
}

?>
</body>
</html>