<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert_customers.php" method="post">
        <label for="">Número do Cliente</label>
        <input type="text" name="numero_cliente" id="numero_cliente">
        <br />
    <label for="">Nome do Cliente</label>
    <input type="text" name="nome_cliente">
    <br />
    <label for="">Primeiro nome do Contato</label>
    <input type="text" name="first_name_contact">
    <br />
    <label for="">Ultimo nome do contato</label>
    <input type="text" name="last_name_contact">
    <br />
    <label for="">Telefone do Cliente</label>
    <input type="text" name="phone">
    <br />
    <label for="">Endereço 1</label>
    <input type="text" name="adress1">
    <br />
    <label for="">Endereço 2</label>
    <input type="text" name="adress2">
    <br />
    <label for="">Cidade do Cliente</label>
    <input type="text" name="city">
    <br />
    <label for="">Estado do Cliente</label>
    <input type="text" name="state">
    <br />
    <label for="">Pais do Cliente</label>
    <input type="text" name="country">
    <br />
    <label for="">Identidade do representante de vendas</label>
    <input type="text" name="fk_employess_sales">
    <br />
    <label for="">Limite de credito</label>
    <input type="text" name="credit_limit">
    <br />
   <button type="submit">Enviar dados</button>
   
</form>
</body>
</html>