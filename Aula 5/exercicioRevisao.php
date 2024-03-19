<?php
//crie um programa que com base na idade do usuário
//e gênero cobre valores diferentes no rodízio de bolo
//caso o usuário seja do gênero masculino, e tenha mais de 12 anos
//cobrar 80 reais
//caso seja do gênero feminino e tenha mais de 12 anos
//cobre o valor de 60 reais
//caso sejam crianças com menos de 12 anos cobre apenas 20
//caso inclua outros gêneros defina você mesmo os valores

$idade=13;
$genero="feminino";

if($idade>12 && $genero=="feminino"){
    echo 'o valor é R$60,00';
}
else if($idade>12 && $genero=="masculino"){
    echo 'o valor é R$80,00';
}
else if($idade<12){
    echo 'o valor é R$20,00';
}
if($genero=="criança"){
    echo 'o valor é R$25,00';
}
?>