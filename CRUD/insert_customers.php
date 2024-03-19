<?php
include_once("conexao.php");


$id=$_POST['numero_cliente'];
$name_customer=$_POST['nome_cliente'];
$first_contact=$_POST['first_name_contact'];
$last_contact_name=$_POST['last_name_contact'];
$phone=$_POST['phone'];
$adress1=$_POST['adress1'];
$adress2=$_POST['adress2'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$fk=$_POST['fk_employess_sales'];
$limit=$_POST['credit_limit'];

//query faz comando direto com o banco, e não se preocupa 
//com o conteúdo do comando

//SQLINJECTION: quando a pessoa se aproveita da segurança fraca do banco de dados 
//e coloca códigos nocivos

//usa prepare quando inserir ou atualizar dados
//(deletar) ou ver dados 
$insert=$conexao->prepare("INSERT INTO customers(customerNumber, customerName, contactLastName, contactFirstName, 
phone, adressLine1, adressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit)
VALUES
(:customerNumber :customerName :contactLastName :contactFirstName
 :phone :adressLine1 :adressLine2 :city :state :postalCode :country 
 :salesRepEmployeeNumber :creditLimit)");

try{
    "INSERT INTO customers(customerNumber, customerName, contactLastName, contactFirstName, 
phone, adressLine1, adressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit)
VALUES
(:customerNumber :customerName :contactLastName :contactFirstName
 :phone :adressLine1 :adressLine2 :city :state :postalCode :country 
 :salesRepEmployeeNumber :creditLimit)");




 $insert->execute(
    [
        ':customerNumber' => $id,
        ':customerName' => $name_customer,
        ':contactLastName' => $last_contact_name,
        'contactFirstName' => $first_contact_name,
        ':phone' => $phone,
        'adress1' => $adress1,
        ':adress2' => $adress2,
        ':city' => $city,
        ':state' => $state,
        ':postalCode' => $postalCode,
        ' :country' => $country,
        'salesRepEmployeeNumber' => $fk,
        ' :creditLimit' => $credit_limit
    ]
 )
};
return 'funcionou';
catch(PDOException $e){
    echo 'que pena :('
}
var_dump($id); //investiga a variável
var_dump($name_customer);
var_dump($city);
?>