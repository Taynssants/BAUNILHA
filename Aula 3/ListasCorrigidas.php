<?php

$numeros=[1,2,3,4,10,12,5,7];
//soma elementos
$somaNumeros=$numeros[0]+$numeros[1]+$numeros[2]+$numeros[3];
$somaFacil=array_sum($numeros);
//conta elementos tem dentro da lista
$contarElementos=count($numeros);
$media=$somaFacil/$contarElementos;
//pesquisa se na lista existe o elemento
//devolve como resposta true or false
//primeiro argumento é o procurado pelo in_array
//segundo argumento é o nome da lista onde ele vai procurar o valor
$existeLista=in_array(1,$numeros);
//primeiro argumento é o procurado
//segundo argumento é em qual lista vou procurar
$qualAPosicaoDoElemento=array_search(10,$numeros);
//remove o ultimo elemento da lista
array_pop($numeros);
//adiciona o segundo argumento no fim da lista
array_push($numeros,10);
//inverte toda a lista
array_reverse($numeros);
//primeiro argumento qual lista iremos afetar
//segundo argumento onde iremos comecar a mexer(posicao) na lista
//terceiro argumento quantos elementos removeremos no processo
//quarto em diante, quais elementos serão adicionados
array_splice($numeros,1,0,"laranja");

print_r($numeros);






?>