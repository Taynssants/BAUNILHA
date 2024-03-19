<?php
require_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Animais</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Espécie</th>
</tr>
<?php
$select=$conexao->query("SELECT * FROM animal");
 while($linha = $select->fetch(PDO::FETCH_ASSOC)){
    echo 
    "<tr>
    <td>$linha[id]</td>
    <td>$linha[nome_animal]</td>
    <td>$linha[especie]</td>
    <td>
    <a href='deletar.php?id=$linha[id]'>Deletar</a>
    <a href='editar.php?id=$linha[id]'>Editar</a>
    </td>
    </tr>";
 }
?>
</table>

<br />
<a href="inserirAnimal.php"> Inserir Animal </a>
</body>
</html>