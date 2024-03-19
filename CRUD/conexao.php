<?php
$host="localhost";
$port="3306"; //preciso configurar uma porta caso seja diferente de 3306
$database="classicmodels";
$username="root";
$password=1234; //número não precisa de aspas!!!

try{
    $conexao=new PDO("mysql:host=$host;dbname=$database", $username, $password);
    echo 'ok';
}catch(Exception $e){
    echo $e->getMessage();
}
?>