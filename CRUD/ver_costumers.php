<?php
require_once("conexao.php"); //essa parte serve para ou achar uma conexão ou der errado
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Numero do Cliente</th>
            <th>Nome do Cliente</th>
            <th>Telefone do Cliente</th>
            <th>Cidade do Cliente</th>
            </tr>
            
                <?php
                $select=$conexao->query("SELECT customerNumber, customerName, phone,city FROM customers;");
                while($linha=$select->fetch(PDO::FETCH_ASSOC)){
                    echo "<tr>
                    <td>$linha[customerNumber]</td>
                    <td>$linha[customerName]</td>
                    <td>$linha[phone]</td>
                    <td>$linha[city]</td>
                    </tr>
                    ";
                }
                ?>
</table>

</body>
</html>