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
    <table>
        <tr>
            <th>Id</th>
            <th>Nome do Animal</th>
            <th>Especie</th>
            </tr>
            
                <?php
                $select=$conexao->query("SELECT id, nome_animal, especie, FROM animal;");
                while($linha=$select->fetch(PDO::FETCH_ASSOC)){
                    echo "<tr>
                    <td>$linha[id]</td>
                    <td>$linha[nome_animal]</td>
                    <td>$linha[especie]</td>
                    </tr>"
                }
                ?>
</table>

</body>
</html>