<?php
//4 tipos de variáveis
$numero=1;
//integer
$texto="texto";
//string
$ehAdm=true;
//boolean: verdadeiro(true) ou falso(false)
$decimal=7.8;
//float

//$textoDigitado=trim(fgets(stdin)); -- não funciona 

//Verifique se a pessoa tem acesso a balada que só permite 
//a entrada de maiores de idade
$idade=7;
$temAcompanhante=true;
// = é atribuição estou dando valor
// == é uma pergunta, estou comparando valores
// === é uma pergunta, estou comparando valores e tipos


if($idade>=18 || $temAcompanhante==true){
    echo 'Pode entrar';
}
else{
    echo 'proibido entrar';
}
//Verifique se o usuário tem login "adm e senha "1234"
//caso tenha o deixe entrar

$login="pamonha";
$senha=1234;
//&& é equivalente ao "e"
//|| é equivalente 
if($login=="adm" && $senha==1234){
    echo 'entrada proibida'
}
?>