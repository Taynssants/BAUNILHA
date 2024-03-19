<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--get parametros na url: usado para coisas banais, as informações aparecem no código de pesquisa, ele -->
    <!--post: envia um pacote (método usado para mandar informações de forma segura) -->
    <form action="recebimento.php" method="post">
        <label for="">Nome: </label>
        <input type="text" name="nome" id="nome" />
        <button type='submit'>enviar dados</button>
</form>
<a href="recebimento.php?id=1">click aqui</a>
</body>
</html>