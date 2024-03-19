<?php
$host="localhost";
$port="3306"; 
$database="zoo";
$username="root";
$password=1234; 

try{
    $conexao=new PDO("mysql:host=$host;dbname=$database", $username, $password);
    echo 'ok';
}catch(Exception $e){
    echo $e->getMessage();
}
?>